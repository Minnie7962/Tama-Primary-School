<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Semester;

class SemesterController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'semester_name' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'session_id' => 'required|exists:school_sessions,id',
        ]);

        // Create a new semester
        Semester::create([
            'semester_name' => $request->semester_name,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'session_id' => $request->session_id,
        ]);

        // Redirect with a success message
        return redirect()->route('semesters.index')->with('success', 'Semester created successfully!');
    }
}
