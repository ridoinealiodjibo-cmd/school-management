@extends('layout')

@section('content')
    <div style="margin: 20px;">
        <h3>Edit Student</h3>
        
        <form action="{{ route('students.update', $student->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="form-group mb-3">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" value="{{ $student->name }}" required>
            </div>
            
            <div class="form-group mb-3">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" value="{{ $student->email }}" required>
            </div>
            
            <div class="form-group mb-3">
                <label for="phone">Phone:</label>
                <input type="text" class="form-control" name="phone" value="{{ $student->phone }}" required>
            </div>
            
            <div class="form-group mb-3">
                <label for="section">Section:</label>
                <input type="text" class="form-control" name="section" value="{{ $student->section }}" required>
            </div>
            
            <div class="form-group mb-3">
                <label for="image">Image (laisser vide pour garder l'ancienne):</label>
                <input type="file" class="form-control" name="image">
            </div>
            
            <button type="submit" class="btn btn-primary">Update Student</button>
        </form>
    </div>
@endsection