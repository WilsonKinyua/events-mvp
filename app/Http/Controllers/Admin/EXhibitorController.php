<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class EXhibitorController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('exhibitors_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $exhibitor = Company::with(['media'])->where('category', "=", "exhibitor")->get();
        return view('admin.exhibitor.index', compact('exhibitor'));
    }
}
