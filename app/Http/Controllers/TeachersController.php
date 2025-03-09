<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\lecture;

class TeachersController extends Controller
{
    public function index($BranchId){
        $lectureData = lecture::where('BranchId', $BranchId)
        ->select('*')
        ->get();
    
        return view('Teacher.teachers', compact('lectureData', 'BranchId'));
    }
    public function create($BranchId):View
   {
      return view('Teacher.create', compact('BranchId'));
   }
   public function store(Request $request)
{
    // Create the student record
    lecture::create([
        'Name' => $request->Name,
        'Course_Module' => $request->Course_Module,
        'Phone_Number' => $request->Phone_Number,
        'Salary' => $request->Salary,
        'BranchId' => $request->BranchId,
    ]);

    return redirect()->route('teachers.index', ['BranchId' => $request->BranchId]);
}
}
