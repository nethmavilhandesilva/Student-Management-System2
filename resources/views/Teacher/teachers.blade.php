@extends('layouts.app')

@section('content')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endpush
<body>
    <h1>Lectures Data (Branch ID: {{ request()->BranchId }})</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Course_Module</th>
            <th>Phone_Number</th>
            <th>Salary</th>
            <th>Branch ID</th>
        </tr>
        @foreach ( $lectureData as $lecture)
            <tr>
                <td>{{ $lecture->id }}</td>
                <td>{{ $lecture->Name }}</td>
                <td>{{ $lecture->Course_Module }}</td>
                <td>{{ $lecture->Phone_Number }}</td>
                <td>{{ $lecture->Salary }}</td>
                <td>{{ $lecture->BranchId }}</td>
                <td>
                    <a href="{{ route('teachers.create', ['BranchId' => $lecture->BranchId]) }}" class="btn btn-success">Add</a>
                    <form action="{{ route('teachers.destroy', ['id' => $lecture->id, 'BranchId' => $lecture->BranchId]) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>

                </td>
            </tr>
        @endforeach
    </table>
</body>

@endsection