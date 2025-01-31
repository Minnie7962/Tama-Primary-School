<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarksController extends Controller
{
    public function create()
    {
        return view('marks.create');
    }

    public function results()
    {
        return view('marks.results');
    }

    public function student()
    {
        return view('marks.student');
    }

    public function submitFinalMarks()
    {
        return view('marks.submit-final-marks');
    }

    public function view()
    {
        return view('marks.view');
    }
}
