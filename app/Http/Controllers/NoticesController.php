<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticesController extends Controller
{
    public function create()
    {
        return view('notices.create');
    }
}