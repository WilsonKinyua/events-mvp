<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class SponsorController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('sponsor_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sponsor = Company::with(['media'])->where('category', "=", "sponsor")->get();
        return view('admin.sponsor.index', compact('sponsor'));
    }
}
