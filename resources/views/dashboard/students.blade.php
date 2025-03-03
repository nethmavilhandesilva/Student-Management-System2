@extends('layouts.app')

@section('content')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endpush
<body>
    <h1>Students Data (Branch ID: {{ request()->BranchId }})</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Course Name</th>
            <th>Age</th>
            <th>NIC Number</th>
            <th>Branch ID</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
        @foreach ($studentData as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->Name }}</td>
                <td>{{ $student->Course_Name }}</td>
                <td>{{ $student->Age }}</td>
                <td>{{ $student->NIC_Number }}</td>
                <td>{{ $student->BranchId }}</td>
                <td>{{ $student->created_at }}</td>
                <td>{{ $student->updated_at }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
@endsection