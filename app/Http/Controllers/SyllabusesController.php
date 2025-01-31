<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SyllabusesController extends Controller
{
    public function create()
    {
        return view('syllabi.create');
    }

    public function show()
    {
        return view('syllabi.show');
    }
}
