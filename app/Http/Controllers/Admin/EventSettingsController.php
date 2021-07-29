<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyEventSettingRequest;
use App\Http\Requests\StoreEventSettingRequest;
use App\Http\Requests\UpdateEventSettingRequest;
use App\Models\EventSetting;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class EventSettingsController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('event_setting_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $eventSettings = EventSetting::with(['media'])->get();

        return view('admin.eventSettings.index', compact('eventSettings'));
    }

    public function create()
    {
        abort_if(Gate::denies('event_setting_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.eventSettings.create');
    }

    public function store(StoreEventSettingRequest $request)
    {
        $eventSetting = EventSetting::create($request->all());

        if ($request->input('event_logo', false)) {
            $eventSetting->addMedia(storage_path('tmp/uploads/' . basename($request->input('event_logo'))))->toMediaCollection('event_logo');
        }

        foreach ($request->input('sliders', []) as $file) {
            $eventSetting->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('sliders');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $eventSetting->id]);
        }

        return redirect()->back()->with("success","Details successfully inserted");
    }

    public function edit(EventSetting $eventSetting)
    {
        abort_if(Gate::denies('event_setting_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.eventSettings.edit', compact('eventSetting'));
    }

    public function update(UpdateEventSettingRequest $request, EventSetting $eventSetting)
    {
        $eventSetting->update($request->all());

        if ($request->input('event_logo', false)) {
            if (!$eventSetting->event_logo || $request->input('event_logo') !== $eventSetting->event_logo->file_name) {
                if ($eventSetting->event_logo) {
                    $eventSetting->event_logo->delete();
                }
                $eventSetting->addMedia(storage_path('tmp/uploads/' . basename($request->input('event_logo'))))->toMediaCollection('event_logo');
            }
        } elseif ($eventSetting->event_logo) {
            $eventSetting->event_logo->delete();
        }

        if (count($eventSetting->sliders) > 0) {
            foreach ($eventSetting->sliders as $media) {
                if (!in_array($media->file_name, $request->input('sliders', []))) {
                    $media->delete();
                }
            }
        }
        $media = $eventSetting->sliders->pluck('file_name')->toArray();
        foreach ($request->input('sliders', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $eventSetting->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('sliders');
            }
        }

        return redirect()->back()->with("success","Details updated successfully");
    }

    public function show(EventSetting $eventSetting)
    {
        abort_if(Gate::denies('event_setting_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.eventSettings.show', compact('eventSetting'));
    }

    public function destroy(EventSetting $eventSetting)
    {
        abort_if(Gate::denies('event_setting_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $eventSetting->delete();

        return back();
    }

    public function massDestroy(MassDestroyEventSettingRequest $request)
    {
        EventSetting::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('event_setting_create') && Gate::denies('event_setting_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new EventSetting();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
