<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public function index()
    {
        return view('classes.index');
    }

    public function edit()
    {
        return view('classes.edit');
    }
}
