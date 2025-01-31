<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamsController extends Controller
{
    public function index()
    {
        return view('exams.index');
    }

    public function create()
    {
        return view('exams.create');
    }

    public function editRule()
    {
        return view('exams.edit-rule');
    }

    public function history()
    {
        return view('exams.history');
    }

    public function viewRule()
    {
        return view('exams.view-rule');
    }
}
