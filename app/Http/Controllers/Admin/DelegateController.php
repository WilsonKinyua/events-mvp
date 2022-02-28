<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class DelegateController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('delegate_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $roles = Role::pluck('title', 'id');
        $users = User::with(["roles", "media"])
            ->whereHas("roles", function ($query) {
                $query->where("id", 4);
            })
            ->get();
        return view('admin.delegate.index', compact('roles', 'users'));
    }

    public function destroy($id)
    {
        abort_if(Gate::denies('delegate_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back()->with('danger', 'Delegate deleted successfully');
    }
}
