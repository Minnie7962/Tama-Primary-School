<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SchoolSession;

class SchoolSessionController extends Controller
{
    public function index()
    {
        $sessions = SchoolSession::all(); // Fetch all sessions
        return view('sessions.index', compact('sessions'));
    }
    
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'session_name' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        // Create a new session
        SchoolSession::create([
            'session_name' => $request->session_name,
        ]);

        // Redirect with a success message
        return redirect()->route('sessions.index')->with('success', 'Session created successfully!');
    }
}
