@extends('layouts.app')

@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @endpush

    <div class="card">
        <div class="card-header">Students Page</div>
        <div class="card-body">
            <form action="{{ route('students.store') }}" method="POST">
                @csrf
                <input type="hidden" name="BranchId" value="{{ $BranchId }}">

                <div class="mb-3">
                    <label for="Name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="Name" required>
                </div>

                <div class="mb-3">
                    <label for="Course_Name" class="form-label">Course Name</label>
                    <input type="text" class="form-control" name="Course_Name" required>
                </div>

                <div class="mb-3">
                    <label for="Age" class="form-label">Age</label>
                    <input type="number" class="form-control" name="Age" required>
                </div>

                <div class="mb-3">
                    <label for="NIC_Number" class="form-label">NIC Number</label>
                    <input type="text" class="form-control" name="NIC_Number" required>
                </div>

                <button type="submit" class="btn btn-primary">Add Student</button>
            </form>
        </div>
    </div>
@endsection
