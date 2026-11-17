@extends('layout')

@section('content')
    <div style="margin: 20px;">
        <h3>Students List</h3>
        
        <table class="table table-striped" style="width: 100%; margin-top: 20px;">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Section</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
    <tr>
        <td>{{ $student->id }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->email }}</td>
        <td>{{ $student->phone }}</td>
        <td>{{ $student->section }}</td>
        <td><img src="/image/{{ $student->image }}" width="96" height="96"></td>
        <td>
            <form method="GET" action="{{ route('students.show', $student->id) }}" style="display:inline;">
                <button type="submit" class="btn btn-info btn-sm">Show</button>
            </form>
        </td>
        <td>
            <form method="GET" action="{{ route('students.edit', $student->id) }}" style="display:inline;">
                <button type="submit" class="btn btn-primary btn-sm">Edit</button>
            </form>
        </td>
        <td>
            <form method="POST" action="{{ route('students.destroy', $student->id) }}" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
        </td>
    </tr>
@endforeach