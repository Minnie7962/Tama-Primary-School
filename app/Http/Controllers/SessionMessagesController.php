<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionMessagesController extends Controller
{
    public function index()
    {
        return view('session-messages');
    }
}
