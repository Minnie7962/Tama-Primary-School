<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssignmentsController extends Controller
{
    public function index()
    {
        return view('assignments.index');
    }

    public function create()
    {
        return view('assignments.create');
    }
}
