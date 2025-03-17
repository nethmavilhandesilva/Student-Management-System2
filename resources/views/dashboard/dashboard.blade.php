@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h2 class="main-title mb-3">{{ $BranchId }} Branch Dashboard</h2>
                <div class="main-title mb-4">{{ $localTime }}</div> <!-- Displays local time in Sri Lanka -->
            </div>
            <div id="dashboard-content">
                <div class="row stat-cards">
                    <!-- Total Students Card -->
                    <div class="col-md-6 col-xl-3">
                        <a href="{{ route('students.index', ['BranchId' => $BranchId]) }}" class="text-decoration-none">
                            <article class="stat-cards-item">
                                <div class="shadow-sm">
                                    <div class="stat-cards-info">
                                        <h5 class="stat-cards-info__num">Total Students</h5>
                                        <p class="stat-cards-info__num">
                                            {{ number_format($totalStudents) }} Students
                                        </p>
                                    </div>
                                    <button class="main-btn">
                                        <span class="circle" aria-hidden="true">
                                            <span class="icon arrow"></span>
                                        </span>
                                        <span class="button-text">Check More</span>
                                    </button>
                                </div>
                            </article>
                        </a>
                    </div>
                

                    <!-- Lectures Card -->
                    <div class="col-md-6 col-xl-3">
                        <a href="{{ route('teachers.index', ['BranchId' => $BranchId]) }}" class="text-decoration-none">
                            <article class="stat-cards-item">
                                <div class="shadow-sm">
                                    <div class="stat-cards-info">
                                        <h5 class="stat-cards-info__num">Lectures</h5>
                                        <p class="stat-cards-info__num">
                                            {{ number_format( $totallectures) }} Teachers
                                        </p>
                                    </div>
                                    <button class="main-btn">
                                        <span class="circle" aria-hidden="true">
                                            <span class="icon arrow"></span>
                                        </span>
                                        <span class="button-text">Check More</span>
                                    </button>
                                </div>
                            </article>
                        </a>
                    </div>
                    <!-- Branch card -->
                    <div class="col-md-6 col-xl-3">
                        <a href="{{ route('branches.index', ['BranchId' => $BranchId]) }}" class="text-decoration-none">
                            <article class="stat-cards-item">
                                <div class="shadow-sm">
                                    <div class="stat-cards-info">
                                        <h5 class="stat-cards-info__num">Total Branches</h5>
                                        <p class="stat-cards-info__num">
                                            {{ number_format($totalBranches) }} Branches
                                        </p>
                                    </div>
                                    <button class="main-btn">
                                        <span class="circle" aria-hidden="true">
                                            <span class="icon arrow"></span>
                                        </span>
                                        <span class="button-text">Check More</span>
                                    </button>
                                </div>
                            </article>
                        </a>
                    </div>
                    <!-- Total Courses Card -->
                    <div class="col-md-6 col-xl-3">
                        <a href="{{ route('courses.index', ['BranchId' => $BranchId]) }}" class="text-decoration-none">
                            <article class="stat-cards-item">
                                <div class="shadow-sm">
                                    <div class="stat-cards-info">
                                        <h5 class="stat-cards-info__num">Total Courses</h5>
                                        <p class="stat-cards-info__num">
                                            {{ number_format( $totalCourses) }} Courses
                                        </p>
                                    </div>
                                    <button class="main-btn">
                                        <span class="circle" aria-hidden="true">
                                            <span class="icon arrow"></span>
                                        </span>
                                        <span class="button-text">Check More</span>
                                    </button>
                                </div>
                            </article>
                        </a>
                    </div>     
                </div> <!-- Closing the stat-cards row -->
            </div>
        </main>
    </div>
</div>
@endsection
