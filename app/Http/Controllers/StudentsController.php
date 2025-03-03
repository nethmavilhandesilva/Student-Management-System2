<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class StudentsController extends Controller
{
   public function index($BranchId){
      $studentData = student::where('BranchId', $BranchId)
      ->select('*')
      ->get();
  
      return view('dashboard.students', compact('studentData', 'BranchId'));
  }
}
