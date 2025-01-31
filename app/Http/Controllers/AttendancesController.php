<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendancesController extends Controller
{
    public function index()
    {
        return view('attendances.index');
    }

    public function take()
    {
        return view('attendances.take');
    }

    public function view()
    {
        return view('attendances.view');
    }

    public function attendance()
    {
        return view('attendances.attendance');
    }
}
