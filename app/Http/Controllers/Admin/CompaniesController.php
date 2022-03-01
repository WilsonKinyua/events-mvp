<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyCompanyRequest;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Mail\SetPassword;
use App\Models\Company;
use App\Models\EventSetting;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;

class CompaniesController extends Controller
{
    use MediaUploadingTrait;
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('company_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $partners = Company::with(['media'])->where('category', "=", "partner")->get();
        $eventSetting = EventSetting::with(['media'])->get()->first();

        return view('admin.companies.index', compact('eventSetting','partners'));
    }

    public function create()
    {
        abort_if(Gate::denies('company_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.companies.create');
    }

    public function store(StoreCompanyRequest $request)
    {
        abort_if(Gate::denies('company_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $company = Company::create($request->all());
        // create user for company
        $user = User::create([
            'name' => $company->name,
            'email' => $company->email,
            'token' => Str::random(60),
        ]);
        // send email to user to set password
        Mail::to($user->email)->send(new SetPassword($user));

        if ($request->input('logo', false)) {
            $company->addMedia(storage_path('tmp/uploads/' . basename($request->input('logo'))))->toMediaCollection('logo');
        }

        if ($request->input('cover_image', false)) {
            $company->addMedia(storage_path('tmp/uploads/' . basename($request->input('cover_image'))))->toMediaCollection('cover_image');
        }

        foreach ($request->input('downloads', []) as $file) {
            $company->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('downloads');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $company->id]);
        }

        return redirect()->back()->with("success", "Company added successfully");
    }

    public function edit(Company $company)
    {
        abort_if(Gate::denies('company_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.companies.edit', compact('company'));
    }

    public function update(UpdateCompanyRequest $request, Company $company)
    {
        $company->update($request->all());

        if ($request->input('logo', false)) {
            if (!$company->logo || $request->input('logo') !== $company->logo->file_name) {
                if ($company->logo) {
                    $company->logo->delete();
                }
                $company->addMedia(storage_path('tmp/uploads/' . basename($request->input('logo'))))->toMediaCollection('logo');
            }
        } elseif ($company->logo) {
            $company->logo->delete();
        }

        if ($request->input('cover_image', false)) {
            if (!$company->cover_image || $request->input('cover_image') !== $company->cover_image->file_name) {
                if ($company->cover_image) {
                    $company->cover_image->delete();
                }
                $company->addMedia(storage_path('tmp/uploads/' . basename($request->input('cover_image'))))->toMediaCollection('cover_image');
            }
        } elseif ($company->cover_image) {
            $company->cover_image->delete();
        }

        if (count($company->downloads) > 0) {
            foreach ($company->downloads as $media) {
                if (!in_array($media->file_name, $request->input('downloads', []))) {
                    $media->delete();
                }
            }
        }
        $media = $company->downloads->pluck('file_name')->toArray();
        foreach ($request->input('downloads', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $company->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('downloads');
            }
        }

        return redirect()->back()->with("success", "Company updated successfully");
    }

    public function show(Company $company)
    {
        abort_if(Gate::denies('company_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.companies.show', compact('company'));
    }

    public function destroy(Company $company)
    {
        abort_if(Gate::denies('company_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $company->delete();

        return back();
    }

    public function massDestroy(MassDestroyCompanyRequest $request)
    {
        Company::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('company_create') && Gate::denies('company_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Company();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
