<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EventSetting;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class SpeakerController extends Controller
{
    // view speakers
    public function index()
    {
        abort_if(Gate::denies('speaker_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $roles = Role::pluck('title', 'id');
        $users = User::with(["roles", "media"])->whereHas("roles", function ($query) {
            $query->where("id", 2);
        })->get();
        return view('admin.speaker.index', compact('users', 'roles'));
    }
}
