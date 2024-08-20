<!-- resources/views/students/edit.blade.php -->

@extends('layout')

@section('content')
    <div class="container">
        <h1>Edit Student</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('students.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="student_id" class="form-label">Student ID</label>
                <input type="text" class="form-control" id="student_id" name="student_id" value="{{ $student->student_id }}">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}">
            </div>
            <div class="mb-3">
                <label for="rfid_card_no" class="form-label">RFID Card No.</label>
                <input type="text" class="form-control" id="rfid_card_no" name="rfid_card_no" value="{{ $student->rfid_card_no }}">
            </div>
            <div class="mb-3">
                <label for="room_id" class="form-label">Room ID</label>
                <input type="text" class="form-control" id="room_id" name="room_id" value="{{ $student->room_id }}">
            </div>
            <div class="mb-3">
                <label for="event_type" class="form-label">Event Type</label>
                <input type="text" class="form-control" id="event_type" name="event_type" value="{{ $student->event_type }}">
            </div>
            <div class="mb-3">
                <label for="timestamp" class="form-label">Timestamp</label>
                <input type="datetime-local" class="form-control" id="timestamp" name="timestamp" value="{{ $student->timestamp }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection

