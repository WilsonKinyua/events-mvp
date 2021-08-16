<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyEventScheduleRequest;
use App\Http\Requests\StoreEventScheduleRequest;
use App\Http\Requests\UpdateEventScheduleRequest;
use App\Models\AgendaDate;
use App\Models\EventSchedule;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EventScheduleController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('event_schedule_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $eventSchedules = EventSchedule::with(['event_program_date', 'speakers'])->get();

        return view('admin.eventSchedules.index', compact('eventSchedules'));
    }

    public function create()
    {
        abort_if(Gate::denies('event_schedule_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $event_program_dates = AgendaDate::pluck('agenda_date', 'id')->prepend(trans('global.pleaseSelect'), '');

        $speakers = User::pluck('name', 'id');

        return view('admin.eventSchedules.create', compact('event_program_dates', 'speakers'));
    }

    public function store(StoreEventScheduleRequest $request)
    {
        $eventSchedule = EventSchedule::create($request->all());
        $eventSchedule->speakers()->sync($request->input('speakers', []));

        // return redirect()->route('admin.event-schedules.index');
        return redirect()->back()->with('success','Agenda created successfully!');
    }

    public function edit(EventSchedule $eventSchedule)
    {
        abort_if(Gate::denies('event_schedule_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $event_program_dates = AgendaDate::pluck('agenda_date', 'id')->prepend(trans('global.pleaseSelect'), '');

        $speakers = User::pluck('name', 'id');

        $eventSchedule->load('event_program_date', 'speakers');

        return view('admin.eventSchedules.edit', compact('event_program_dates', 'speakers', 'eventSchedule'));
    }

    public function update(UpdateEventScheduleRequest $request, EventSchedule $eventSchedule)
    {
        $eventSchedule->update($request->all());
        $eventSchedule->speakers()->sync($request->input('speakers', []));

        return redirect()->route('admin.event-schedules.index');
    }

    public function show(EventSchedule $eventSchedule)
    {
        abort_if(Gate::denies('event_schedule_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $eventSchedule->load('event_program_date', 'speakers');

        return view('admin.eventSchedules.show', compact('eventSchedule'));
    }

    public function destroy(EventSchedule $eventSchedule)
    {
        abort_if(Gate::denies('event_schedule_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $eventSchedule->delete();

        return back();
    }

    public function massDestroy(MassDestroyEventScheduleRequest $request)
    {
        EventSchedule::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
