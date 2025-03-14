@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Branch Data (Branch ID: {{ $BranchId }})</h1>
  
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
                <td>  <a href="{{ route('branches.create', ['BranchId' => $BranchId]) }}" class="btn btn-primary mb-3">Add New Branch</a>
                <a href="{{ route('branches.edit', ['id' => $branch->id, 'BranchId' => $branch->BranchId]) }}" class="btn btn-primary">Update</a>
                <form action="{{ route('branches.destroy', ['id' => $branch->id, 'BranchId' => $branch->BranchID]) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>

            </tr>
        @endforeach
    </table>
</div>
@endsection