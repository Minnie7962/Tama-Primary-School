<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function addRule()
    {
        return view('exams.grade.add-rule');
    }

    public function create()
    {
        return view('exams.grade.create');
    }

    public function view()
    {
        return view('exams.grade.view');
    }

    public function viewRules()
    {
        return view('exams.grade.view-rules');
    }
}
