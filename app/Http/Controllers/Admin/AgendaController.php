<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AgendaDate;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
     // view agenda
     public function index() {
        $agendaDates = AgendaDate::all();
        return view('admin.agenda.index', compact('agendaDates'));
    }
}
