@extends('layouts.app')

@section('content')
<h1>Edit Branches Details</h1>

<form action="{{ route('branches.update', ['id' => $branch->id, 'BranchId' => $branch->BranchId]) }}" method="POST">


    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="Name">Name:</label>
        <input type="text" class="form-control" name="Name" value="{{ $branch->Name }}" required>
    </div>

    <div class="form-group">
        <label for="Location">Location:</label>
        <input type="text" class="form-control" name="Location" value="{{ $branch->Location }}" required>
    </div>

    <div class="form-group">
        <label for="BranchId">Branch ID:</label>
        <input type="text" class="form-control" name="BranchId" value="{{ $branch->BranchId }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
