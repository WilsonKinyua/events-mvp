<?php

namespace App\Http\Controllers\Admin;

use App\Models\EventSetting;

class HomeController
{
    public function index()
    {
        $eventSetting = EventSetting::with(['media'])->get()->first();
        return view('home', compact('eventSetting'));
    }
}
