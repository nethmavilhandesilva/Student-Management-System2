@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h2 class="main-title mb-3">{{ $customerId }} Branch Dashboard</h2>
                <div class="main-title mb-4">{{ now()->format('F d, Y') }}</div>
            </div>
          
@endsection
