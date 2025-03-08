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
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
        @foreach ( $lectureData as $lecture)
            <tr>
                <td>{{ $lecture->id }}</td>
                <td>{{ $lecture->Name }}</td>
                <td>{{ $lecture->Course_Module }}</td>
                <td>{{ $lecture->Phone_Number }}</td>
                <td>{{ $lecture->Salary }}</td>
                <td>{{ $lecture->BranchId }}</td>
                <td>{{ $lecture->created_at }}</td>
                <td>{{ $lecture->updated_at }}</td>
            </tr>
        @endforeach
    </table>
</body>

@endsection