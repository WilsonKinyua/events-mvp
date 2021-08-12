<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAgendaDateRequest;
use App\Http\Requests\UpdateAgendaDateRequest;
use App\Http\Resources\Admin\AgendaDateResource;
use App\Models\AgendaDate;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgendaDatesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('agenda_date_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AgendaDateResource(AgendaDate::all());
    }

    public function store(StoreAgendaDateRequest $request)
    {
        $agendaDate = AgendaDate::create($request->all());

        return (new AgendaDateResource($agendaDate))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(AgendaDate $agendaDate)
    {
        abort_if(Gate::denies('agenda_date_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AgendaDateResource($agendaDate);
    }

    public function update(UpdateAgendaDateRequest $request, AgendaDate $agendaDate)
    {
        $agendaDate->update($request->all());

        return (new AgendaDateResource($agendaDate))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(AgendaDate $agendaDate)
    {
        abort_if(Gate::denies('agenda_date_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $agendaDate->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
