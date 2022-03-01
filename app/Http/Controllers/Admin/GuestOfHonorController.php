<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class GuestOfHonorController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('guest_of_honor_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $roles = Role::pluck('title', 'id');
        $users = User::with(["roles", "media"])->whereHas("roles", function ($query) {
            $query->where("id", 8);
        })->get();
        return view('admin.guest-of-honor.index', compact('users', 'roles'));
    }

    public function destroy($id)
    {
        abort_if(Gate::denies('guest_of_honor_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $user = User::findOrFail($id);
        $user->delete();

        return back()->with('success', 'Guest Of Honor removed successfully');
    }
}
