<!-- resources/views/students/index.blade.php -->

@extends('students.layout')

@section('content')
    <div class="container">
        <h1>Students</h1>
        <a href="{{ route('attendace.create') }}" class="btn btn-primary">Add New Student</a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success mt-3">
                {{ $message }}
            </div>
        @endif

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Student ID</th>
                    <th>Name</th>
                    <th>RFID Card No.</th>
                    <th>Room ID</th>
                    <th>Event Type</th>
                    <th>Timestamp</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($attendace as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->student_id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->rfid_card_no }}</td>
                        <td>{{ $student->room_id }}</td>
                        <td>{{ $student->event_type }}</td>
                        <td>{{ $student->timestamp }}</td>
                        <td>
                            <a href="{{ route('attendace.index', $student->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('attendace.edit', $student->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('attendace.destroy', $student->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
