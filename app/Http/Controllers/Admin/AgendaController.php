<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AgendaDate;
use App\Models\EventSchedule;
use App\Models\User;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    // view agenda
    public function index()
    {
        $event_program_dates = AgendaDate::all();

        $speakers = User::pluck('name', 'id');
        $id = AgendaDate::orderBy('id', 'asc')->get()->first();
        // print_r(json_encode($id->id));
        $eventSchedules = EventSchedule::with(['event_program_date', 'speakers'])
            ->where('event_program_date_id', "=", $id->id)
            ->get();

        // print_r(json_encode($eventSchedules));
        return view('admin.agenda.index', compact('event_program_dates', 'speakers', 'eventSchedules'));
    }

    // display all agenda dates shedule
    public function showAgendaDateSchedules($id)
    {
        $eventSchedules = EventSchedule::with(['event_program_date', 'speakers'])
            ->where('event_program_date_id', "=", $id)
            ->get();
        $event_program_dates = AgendaDate::all();

        $speakers = User::pluck('name', 'id');

        // print_r(json_encode($eventSchedules));
        return view('admin.agenda.show', compact('eventSchedules', 'event_program_dates', 'speakers'));
    }
}
