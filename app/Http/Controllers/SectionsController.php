<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SectionsController extends Controller
{
    public function edit()
    {
        return view('sections.edit');
    }
}
