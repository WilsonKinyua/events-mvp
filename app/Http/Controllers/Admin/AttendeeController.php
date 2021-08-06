<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EventSetting;
use Illuminate\Http\Request;

class AttendeeController extends Controller
{


    // view attendees
    public function index() {
        return view('admin.attendee.index');
    }
}
