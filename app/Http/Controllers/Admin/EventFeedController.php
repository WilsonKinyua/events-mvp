<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EventSetting;
use App\Models\Post;
use Illuminate\Http\Request;

class EventFeedController extends Controller
{
    // view event feed
    public function index() {
        $posts = Post::with(['created_by'])->orderBy("id","desc")->get();
        return view('admin.event-feed.index', compact('posts'));
    }
}
