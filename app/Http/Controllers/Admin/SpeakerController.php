<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EventSetting;
use Illuminate\Http\Request;

class SpeakerController extends Controller
{
    // view speakers
    public function index() {
        return view('admin.speaker.index');
    }
}
