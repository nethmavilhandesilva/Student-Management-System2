<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lecture;

class TeachersController extends Controller
{
    public function index($BranchId){
        $lectureData = lecture::where('BranchId', $BranchId)
        ->select('*')
        ->get();
    
        return view('dashboard.teachers', compact('lectureData', 'BranchId'));
    }
}
