<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreEventSettingRequest;
use App\Http\Requests\UpdateEventSettingRequest;
use App\Http\Resources\Admin\EventSettingResource;
use App\Models\EventSetting;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EventSettingsApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('event_setting_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EventSettingResource(EventSetting::all());
    }

    public function store(StoreEventSettingRequest $request)
    {
        $eventSetting = EventSetting::create($request->all());

        if ($request->input('event_logo', false)) {
            $eventSetting->addMedia(storage_path('tmp/uploads/' . basename($request->input('event_logo'))))->toMediaCollection('event_logo');
        }

        if ($request->input('sliders', false)) {
            $eventSetting->addMedia(storage_path('tmp/uploads/' . basename($request->input('sliders'))))->toMediaCollection('sliders');
        }

        return (new EventSettingResource($eventSetting))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(EventSetting $eventSetting)
    {
        abort_if(Gate::denies('event_setting_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EventSettingResource($eventSetting);
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

        if ($request->input('sliders', false)) {
            if (!$eventSetting->sliders || $request->input('sliders') !== $eventSetting->sliders->file_name) {
                if ($eventSetting->sliders) {
                    $eventSetting->sliders->delete();
                }
                $eventSetting->addMedia(storage_path('tmp/uploads/' . basename($request->input('sliders'))))->toMediaCollection('sliders');
            }
        } elseif ($eventSetting->sliders) {
            $eventSetting->sliders->delete();
        }

        return (new EventSettingResource($eventSetting))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(EventSetting $eventSetting)
    {
        abort_if(Gate::denies('event_setting_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $eventSetting->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
