<?php

namespace App\Http\Controllers;

use App\Models\Company;
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

        return view('welcome', compact('eventSetting','speakers','users','days','companies'));
    }
}
