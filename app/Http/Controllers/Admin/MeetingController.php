<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EventSetting;
use Illuminate\Http\Request;

class MeetingController extends Controller
{
     // view meetings
     public function index() {
        return view('admin.meeting.index');
    }
}
