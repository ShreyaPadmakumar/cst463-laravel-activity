@extends('layouts.app')

@section('content')

<h2>Add New Student</h2>

@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form method="POST" action="{{ route('students.store') }}">
    @csrf

    <input name="roll_no" placeholder="Roll Number" required>
    <input name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input name="department" placeholder="Department" required>
    <input type="number" name="semester" placeholder="Semester" min="1" max="8" required>
    <input type="number" step="0.01" name="cgpa" placeholder="CGPA" min="0" max="10" required>

    <button type="submit">Save Student</button>
</form>

@endsection