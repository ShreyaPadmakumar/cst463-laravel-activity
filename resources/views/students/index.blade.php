@extends('layouts.app')

@section('content')

<h2>Student List</h2>

@if(session('status'))
    <p style="color:green">
        {{ session('status') }}
    </p>
@endif

<a href="{{ route('students.create') }}">
    Add Student
</a>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Roll Number</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>

    @foreach($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->roll_no }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>
                <a href="{{ route('students.show', $student) }}">
                    View
                </a>
            </td>
        </tr>
    @endforeach
</table>

@endsection