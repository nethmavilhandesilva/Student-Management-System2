@extends('layouts.app')

@section('content')
<h1>Edit Student Details</h1>

<form action="{{ route('students.update', ['id' => $student->id, 'BranchId' => $BranchId]) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="Name">Name:</label>
        <input type="text" class="form-control" name="Name" value="{{ $student->Name }}" required>
    </div>

    <div class="form-group">
        <label for="Course_Name">Course Name:</label>
        <input type="text" class="form-control" name="Course_Name" value="{{ $student->Course_Name }}" required>
    </div>

    <div class="form-group">
        <label for="Age">Age:</label>
        <input type="number" class="form-control" name="Age" value="{{ $student->Age }}" required>
    </div>

    <div class="form-group">
        <label for="NIC_Number">NIC Number:</label>
        <input type="text" class="form-control" name="NIC_Number" value="{{ $student->NIC_Number }}" required>
    </div>

    <div class="form-group">
        <label for="BranchId">Branch ID:</label>
        <input type="text" class="form-control" name="BranchId" value="{{ $student->BranchId }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
