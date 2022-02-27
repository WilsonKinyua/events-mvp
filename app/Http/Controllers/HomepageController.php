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
    public function welcome()
    {
        $eventSetting = EventSetting::with(['media'])->get()->first();

        $speakers = User::with(["roles", "media"])->whereHas("roles", function ($query) {
            $query->where("id", 3);
        })->get();
        $users = User::all();
        // get the number of days between event start and end
        $days = (int) (strtotime($eventSetting->event_end) - strtotime($eventSetting->event_start)) / (60 * 60 * 24);
        $companies = Company::with(['media'])->get();
        $event_program_dates = AgendaDate::all();

        return view('welcome', compact('eventSetting', 'speakers', 'users', 'days', 'companies', 'event_program_dates'));
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

    public function setPassword($token) // display set password view
    {
        $user = User::where('token', $token)->first();
        if (!$user) {
            return redirect()->route('login')->with('error', 'Invalid token');
        }
        return view('auth.passwords.set-password', compact('user'));
    }

    public function createPassword(Request $request) // create user password
    {
        if ($request->password != $request->password_confirmation) {
            return redirect()->back()->with('error', 'Password and Confirm Password does not match');
        }

        $user = User::where('token', $request->token)->first();
        if (!$user) {
            return redirect()->route('login')->with('error', 'Invalid token');
        }
        $user->password = bcrypt($request->password);
        $user->token = null;
        $user->update();
        return redirect()->route('login')->with('success', 'Password set successfully. Please login');
    }
}
