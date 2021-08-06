<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EventSetting;
use Illuminate\Http\Request;

class EventFeedController extends Controller
{
    // view event feed
    public function index() {
        return view('admin.event-feed.index');
    }
}
