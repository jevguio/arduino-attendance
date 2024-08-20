<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendace;

class AttendaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

    $attendace = Attendace::all(); // Fetch all attendace
    return view('students.index', compact('attendace'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'student_id' => 'required',
            'name' => 'required',
            'rfid_card_no' => 'required',
            'room_id' => 'required|exists:rooms,id',
            'event_type' => 'required',
            'timestamp' => 'required|date',
        ]);
    
        Attendace::create($request->all());
        return response()->json([
            'success' => true,
            'message' => 'Student created successfully.',
            'data' => $student, // Optional: Include the created student data
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
