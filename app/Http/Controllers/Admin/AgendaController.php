<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
     // view agenda
     public function index() {
        return view('admin.agenda.index');
    }
}
