<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function edit()
    {
        return view('courses.edit');
    }

    public function student()
    {
        return view('courses.student');
    }

    public function teacher()
    {
        return view('courses.teacher');
    }
}
