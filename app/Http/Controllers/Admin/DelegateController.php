<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class DelegateController extends Controller
{
    public function index()
    {
        $roles = Role::pluck('title', 'id');
        $users = User::with(["roles", "media"])
            ->whereHas("roles", function ($query) {
                $query->where("id", 4);
            })
            ->get();
        return view('admin.delegate.index', compact('roles', 'users'));
    }
}
