@extends('layouts.app')

@section('content')
@push('styles')
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @endpush
<div class="container mt-4">
    <h2>Add New Branch</h2>
    <form action="{{ route('branches.store') }}" method="POST">
        @csrf
        <input type="hidden" name="BranchID" value="{{ $BranchId }}">
        
        <div class="mb-3">
            <label for="Name" class="form-label">Name</label>
            <input type="text" name="Name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="Location" class="form-label">Location</label>
            <input type="text" name="Location" class="form-control" required>
        </div>

        <div class="text-end">
            <button type="submit" class="btn btn-success">Add Branch</button>
        </div>
    </form>
</div>
@endsection