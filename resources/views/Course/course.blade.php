@extends('layouts.app')

@section('content')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endpush
<body>
    <h1>Course Data (Branch ID: {{ request()->BranchId }})</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Course_Name</th>
            <th>Duration</th>
            <th>Branch ID</th>
        </tr>
        @foreach (  $courseData as $course)
            <tr>
                <td>{{ $course->id }}</td>
                <td>{{ $course->Name }}</td>
                <td>{{ $course->Course_ID }}</td>
                <td>{{ $course->Duration }}</td>
                <td>{{ $course->BranchId }}</td>
                <td>
                    <a href="{{ route('courses.create', ['BranchId' => $course->BranchId]) }}" class="btn btn-success">Add</a>
                 
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
@endsection