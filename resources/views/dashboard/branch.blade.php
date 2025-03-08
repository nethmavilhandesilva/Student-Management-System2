@extends('layouts.app')

@section('content')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endpush
<body>
    <h1>Branch Data (Branch ID: {{ request()->BranchId }})</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>BranchID</th>
            <th>Location</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
        @foreach ( $BranchData as $branch)
            <tr>
                <td>{{$branch->id }}</td>
                <td>{{ $branch->Name }}</td>
                <td>{{ $branch->BranchID }}</td>
                <td>{{ $branch->created_at }}</td>
                <td>{{ $branch->updated_at }}</td>
            </tr>
        @endforeach
    </table>
</body>

@endsection