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
    Course::create([
        'Course_ID' => $request->Course_ID,
        'Name' => $request->Name,
        'Duration' => $request->Duration,
        'BranchId' => $request->BranchId,
    ]);

    return redirect()->route('courses.index', ['BranchId' => $request->BranchId])
                     ->with('success', 'Course added successfully!');
}
public function destroy($id, $BranchId)
{
    // Find the student by ID
    $Course = course::find($id);

    // If the student exists, delete it
    if ($Course) {
        $Course->delete();
        return redirect()->route('courses.index', ['BranchId' => $BranchId])
                         ->with('success', 'Course record deleted successfully!');
    }

    return redirect()->route('courses.index', ['BranchId' => $BranchId])
                     ->with('error', 'Courses not found!');
}
}
