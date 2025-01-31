<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function add()
    {
        return view('students.add');
    }

    public function edit()
    {
        return view('students.edit');
    }

    public function list()
    {
        return view('students.list');
    }

    public function profile()
    {
        return view('students.profile');
    }
}
