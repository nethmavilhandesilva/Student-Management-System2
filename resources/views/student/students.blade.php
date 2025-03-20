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
            <th>Actions</th>
        </tr>
        @foreach ($studentData as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->Name }}</td>
                <td>{{ $student->Course_Name }}</td>
                <td>{{ $student->Age }}</td>
                <td>{{ $student->NIC_Number }}</td>
                <td>{{ $student->BranchId }}</td>
                <td>
                    <a href="{{ route('students.create', ['BranchId' => $student->BranchId]) }}" class="btn btn-success">Add</a>
                    <a href="{{ route('students.edit', ['id' => $student->id, 'BranchId' => $student->BranchId]) }}" class="btn btn-primary">Update</a>
                    <a href="{{ route('students.scan', ['BranchId' => $student->BranchId]) }}" class="btn btn-primary">Scan QR Code</a>

                    <form action="{{ route('students.destroy', ['id' => $student->id, 'BranchId' => $student->BranchId]) }}" method="POST" style="display:inline;">
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
