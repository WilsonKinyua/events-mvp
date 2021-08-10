<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EventSetting;
use App\Models\Interest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class AttendeeController extends Controller
{


    // view attendees
    public function index()
    {

        // abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $interests = Interest::pluck('name', 'id');

        $roles = Role::pluck('title', 'id');
        // $users = User::with(['interests', 'roles', 'media'])->get();
        $users = User::with(["roles", "media"])->whereHas("roles", function ($query) {
            $query->where("id", 2);
        })->get();
        return view('admin.attendee.index', compact('interests', 'roles','users'));
    }
}
