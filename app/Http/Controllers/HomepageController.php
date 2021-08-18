<?php

namespace App\Http\Controllers;

use App\Models\AgendaDate;
use App\Models\Company;
use App\Models\EventSchedule;
use App\Models\EventSetting;
use App\Models\User;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function welcome() {
        $eventSetting = EventSetting::with(['media'])->get()->first();

        $speakers = User::with(["roles", "media"])->whereHas("roles", function ($query) {
            $query->where("id", 3);
        })->get();
        $users = User::all();
        // get the number of days between event start and end
        $days = (int) (strtotime($eventSetting->event_end) - strtotime($eventSetting->event_start)) / (60 * 60 * 24);
        $companies = Company::with(['media'])->get();
        $event_program_dates = AgendaDate::all();

        return view('welcome', compact('eventSetting','speakers','users','days','companies','event_program_dates'));
    }

    // public function agendaDay($id){
    //     $eventSetting = EventSetting::with(['media'])->get()->first();

    //     $speakers = User::with(["roles", "media"])->whereHas("roles", function ($query) {
    //         $query->where("id", 3);
    //     })->get();
    //     $users = User::all();
    //     // get the number of days between event start and end
    //     $days = (int) (strtotime($eventSetting->event_end) - strtotime($eventSetting->event_start)) / (60 * 60 * 24);
    //     $companies = Company::with(['media'])->get();
    //     $event_program_dates = AgendaDate::all();
    //     $eventSchedules = EventSchedule::with(['event_program_date', 'speakers'])
    //         ->where('event_program_date_id', "=", $id)
    //         ->get();

    //     return view('single-agenda', compact('eventSetting','speakers','users','days','companies','event_program_dates','eventSchedules'));
    // }
}
