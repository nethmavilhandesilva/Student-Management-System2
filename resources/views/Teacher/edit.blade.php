@extends('layouts.app')

@section('content')
<h1>Edit Lectures Details</h1>

<form action="{{ route('teachers.update', ['id' => $lecture->id, 'BranchId' => $BranchId]) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="Name">Name:</label>
        <input type="text" class="form-control" name="Name" value="{{ $lecture->Name }}" required>
    </div>

    <div class="form-group">
        <label for="Course_Name">Course Name:</label>
        <input type="text" class="form-control" name="Course_Name" value="{{ $lecture->Course_Module }}" required>
    </div>

    <div class="form-group">
        <label for="Age">Phone_Number:</label>
        <input type="number" class="form-control" name="Phone_Number" value="{{ $lecture->Phone_Number }}" required>
    </div>

    <div class="form-group">
        <label for="Salary">Salary:</label>
        <input type="text" class="form-control" name="Salary" value="{{ $lecture->Salary }}" required>
    </div>

    <div class="form-group">
        <label for="BranchId">Branch ID:</label>
        <input type="text" class="form-control" name="BranchId" value="{{ $lecture->BranchId }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
