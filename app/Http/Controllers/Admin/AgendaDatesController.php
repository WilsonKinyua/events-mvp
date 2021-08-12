<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyAgendaDateRequest;
use App\Http\Requests\StoreAgendaDateRequest;
use App\Http\Requests\UpdateAgendaDateRequest;
use App\Models\AgendaDate;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgendaDatesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('agenda_date_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $agendaDates = AgendaDate::all();

        return view('admin.agendaDates.index', compact('agendaDates'));
    }

    public function create()
    {
        abort_if(Gate::denies('agenda_date_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.agendaDates.create');
    }

    public function store(StoreAgendaDateRequest $request)
    {
        $agendaDate = AgendaDate::create($request->all());

        // return redirect()->route('admin.agenda-dates.index');
        return redirect()->back();
    }

    public function edit(AgendaDate $agendaDate)
    {
        abort_if(Gate::denies('agenda_date_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.agendaDates.edit', compact('agendaDate'));
    }

    public function update(UpdateAgendaDateRequest $request, AgendaDate $agendaDate)
    {
        $agendaDate->update($request->all());

        return redirect()->route('admin.agenda-dates.index');
    }

    public function show(AgendaDate $agendaDate)
    {
        abort_if(Gate::denies('agenda_date_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.agendaDates.show', compact('agendaDate'));
    }

    public function destroy(AgendaDate $agendaDate)
    {
        abort_if(Gate::denies('agenda_date_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $agendaDate->delete();

        return back();
    }

    public function massDestroy(MassDestroyAgendaDateRequest $request)
    {
        AgendaDate::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
