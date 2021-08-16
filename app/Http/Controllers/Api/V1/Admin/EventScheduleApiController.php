<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEventScheduleRequest;
use App\Http\Requests\UpdateEventScheduleRequest;
use App\Http\Resources\Admin\EventScheduleResource;
use App\Models\EventSchedule;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EventScheduleApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('event_schedule_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EventScheduleResource(EventSchedule::with(['event_program_date', 'speakers'])->get());
    }

    public function store(StoreEventScheduleRequest $request)
    {
        $eventSchedule = EventSchedule::create($request->all());
        $eventSchedule->speakers()->sync($request->input('speakers', []));

        return (new EventScheduleResource($eventSchedule))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(EventSchedule $eventSchedule)
    {
        abort_if(Gate::denies('event_schedule_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EventScheduleResource($eventSchedule->load(['event_program_date', 'speakers']));
    }

    public function update(UpdateEventScheduleRequest $request, EventSchedule $eventSchedule)
    {
        $eventSchedule->update($request->all());
        $eventSchedule->speakers()->sync($request->input('speakers', []));

        return (new EventScheduleResource($eventSchedule))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(EventSchedule $eventSchedule)
    {
        abort_if(Gate::denies('event_schedule_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $eventSchedule->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
