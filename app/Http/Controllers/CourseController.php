<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\course;

class CourseController extends Controller
{
    public function index($BranchId){
        $courseData = course::where('BranchId', $BranchId)
        ->select('*')
        ->get();
    
        return view('Course.course', compact('courseData', 'BranchId'));
    }
    public function create($BranchId):View
    {
       return view('Course.create', compact('BranchId'));
    }
    public function store(Request $request)
 {
     // Create the student record
     course::create([
         'Name' => $request->Name,
         'Course_ID' => $request->Course_ID ?? Str::uuid(),
         'Duration' => $request->Duration
         
     ]);
 
     return redirect()->route('courses.index', ['BranchId' => $request->BranchId]);
 }
}
