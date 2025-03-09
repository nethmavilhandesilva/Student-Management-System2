@extends('layouts.app')

@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @endpush

    <div class="container mt-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4>Teachers Page</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('teachers.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="BranchId" value="{{ $BranchId }}">
                    
                    <div class="mb-3">
                        <label for="Name" class="form-label">Name</label>
                        <input type="text" name="Name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="Course_Module" class="form-label">Course Module</label>
                        <input type="text" name="Course_Module" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="Phone_Number" class="form-label">Phone Number</label>
                        <input type="number" name="Phone_Number" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="Salary" class="form-label">Salary</label>
                        <input type="text" name="Salary" class="form-control" required>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-success">Add Lecturer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
