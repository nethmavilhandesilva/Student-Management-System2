<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use App\Models\lecture;
use App\Models\branch;
use App\Models\course;
use Carbon\Carbon;
class DashboardController extends Controller
{
    public function index($BranchId)
    {
        $localTime = Carbon::now('Asia/Colombo')->format('F d, Y h:i A');
        $totalStudents = student::where('BranchId', $BranchId)->count();
        $totallectures = lecture::where('BranchId', $BranchId)->count();
        $totalBranches = branch::where('BranchId', $BranchId)->count();
        $totalCourses = course::where('BranchId', $BranchId)->count();
        return view('dashboard.dashboard', compact('BranchId','totalStudents','totallectures','totalBranches','totalCourses','localTime'));
    }
    
}
