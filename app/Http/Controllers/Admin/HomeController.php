<?php

namespace App\Http\Controllers\Admin;

use App\Models\Company;
use App\Models\EventSetting;

class HomeController
{
    public function index()
    {
        $eventSetting = EventSetting::with(['media'])->get()->first();
        $companies = Company::with(['media'])->get();
        return view('home', compact('eventSetting','companies'));
    }
}
