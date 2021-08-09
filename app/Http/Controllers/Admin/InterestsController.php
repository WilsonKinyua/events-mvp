<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyInterestRequest;
use App\Http\Requests\StoreInterestRequest;
use App\Http\Requests\UpdateInterestRequest;
use App\Models\Interest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class InterestsController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('interest_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $interests = Interest::all();

        return view('admin.interests.index', compact('interests'));
    }

    public function create()
    {
        abort_if(Gate::denies('interest_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.interests.create');
    }

    public function store(StoreInterestRequest $request)
    {
        $interest = Interest::create($request->all());

        return redirect()->route('admin.interests.index');
    }

    public function edit(Interest $interest)
    {
        abort_if(Gate::denies('interest_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.interests.edit', compact('interest'));
    }

    public function update(UpdateInterestRequest $request, Interest $interest)
    {
        $interest->update($request->all());

        return redirect()->route('admin.interests.index');
    }

    public function show(Interest $interest)
    {
        abort_if(Gate::denies('interest_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.interests.show', compact('interest'));
    }

    public function destroy(Interest $interest)
    {
        abort_if(Gate::denies('interest_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $interest->delete();

        return back();
    }

    public function massDestroy(MassDestroyInterestRequest $request)
    {
        Interest::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
