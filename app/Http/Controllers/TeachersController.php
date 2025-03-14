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
public function destroy($id, $BranchId)
{
    // Find the student by ID
    $teacher = lecture::find($id);

    // If the student exists, delete it
    if ($teacher) {
        $teacher->delete();
        return redirect()->route('teachers.index', ['BranchId' => $BranchId])
                         ->with('success', 'Teacher record deleted successfully!');
    }

    return redirect()->route('teachers.index', ['BranchId' => $BranchId])
                     ->with('error', 'Teacher not found!');
}
public function edit($id, $BranchId)  
{
    $lecture = lecture::findOrFail($id);
    return view('Teacher.edit', compact('lecture', 'BranchId')); 
}

public function update(Request $request, $id, $BranchId)  // Add BranchId parameter here
{
    $lecture = lecture::findOrFail($id);
    // Update student details
    $lecture->update($request->all());

    // Redirect to the students index page with the BranchId
    return redirect()->route('teachers.index', ['BranchId' => $BranchId])
                     ->with('success', 'Student details updated successfully!');
}

}
