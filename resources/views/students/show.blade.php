<!-- resources/views/students/show.blade.php -->

@extends('layout')

@section('content')
    <div class="container">
        <h1>Student Details</h1>

        <div class="mb-3">
            <strong>ID:</strong> {{ $student->id }}
        </div>
        <div class="mb-3">
            <strong>Student ID:</strong> {{ $student->student_id }}
        </div>
        <div class="mb-3">
            <strong>Name:</strong> {{ $student->name }}
        </div>
        <div class="mb-3">
            <strong>RFID Card No.:</strong> {{ $student->rfid_card_no }}
        </div>
        <div class="mb-3">
            <strong>Room ID:</strong> {{ $student->room_id }}
        </div>
        <div class="mb-3">
            <strong>Event Type:</strong> {{ $student->event_type }}
        </div>
        <div class="mb-3">
            <strong>Timestamp:</strong> {{ $student->timestamp }}
        </div>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
@endsection
