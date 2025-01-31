<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function add()
    {
        return view('teachers.add');
    }

    public function edit()
    {
        return view('teachers.edit');
    }

    public function list()
    {
        return view('teachers.list');
    }

    public function profile()
    {
        return view('teachers.profile');
    }
}
