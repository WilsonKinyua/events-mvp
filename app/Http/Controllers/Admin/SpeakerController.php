<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EventSetting;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class SpeakerController extends Controller
{
    // view speakers
    public function index()
    {
        $roles = Role::pluck('title', 'id');
        $users = User::with(["roles", "media"])->whereHas("roles", function ($query) {
            $query->where("id", 3);
        })->get();
        return view('admin.speaker.index', compact('users', 'roles'));
    }
}
