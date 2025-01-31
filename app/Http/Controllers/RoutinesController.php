<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutinesController extends Controller
{
    public function create()
    {
        return view('routines.create');
    }

    public function show()
    {
        return view('routines.show');
    }
}