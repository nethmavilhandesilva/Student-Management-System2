@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Branch Data (Branch ID: {{ $BranchId }})</h1>
    <a href="{{ route('branches.create', ['BranchId' => $BranchId]) }}" class="btn btn-primary mb-3">Add New Branch</a>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Branch ID</th>
            <th>Location</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
        @foreach ($BranchData as $branch)
            <tr>
                <td>{{ $branch->id }}</td>
                <td>{{ $branch->Name }}</td>
                <td>{{ $branch->BranchID }}</td>
                <td>{{ $branch->Location }}</td>
                <td>{{ $branch->created_at }}</td>
                <td>{{ $branch->updated_at }}</td>
            </tr>
        @endforeach
    </table>
</div>
@endsection