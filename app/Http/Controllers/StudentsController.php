<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;

class StudentsController extends Controller
{
   public function index($BranchId){
      $studentData = student::where('BranchId', $BranchId)
      ->select('*')
      ->get();
  
      return view('student.students', compact('studentData', 'BranchId'));
   }
   public function create($BranchId)
   {
      return view('student.create', compact('BranchId'));
   }
   public function store(Request $request)
{
    // Create the student record
    $student = student::create([
        'Name' => $request->Name,
        'Course_Name' => $request->Course_Name,
        'Age' => $request->Age,
        'NIC_Number' => $request->NIC_Number,
        'BranchId' => $request->BranchId,
    ]);

    // Generate the QR Code for the newly created student
    $qrCode = QrCode::format('png')->size(200)->generate(route('students.show', ['id' => $student->id]));

    // Store QR Code in the public directory
    Storage::disk('public')->put("qrcodes/student_{$student->id}.png", $qrCode);

    // Redirect back to the students index
    return redirect()->route('students.index', ['BranchId' => $request->BranchId]);
}
public function destroy($id, $BranchId)
{
    // Find the student by ID
    $student = Student::find($id);

    // If the student exists, delete it
    if ($student) {
        $student->delete();
        return redirect()->route('students.index', ['BranchId' => $BranchId])
                         ->with('success', 'Student record deleted successfully!');
    }

    return redirect()->route('students.index', ['BranchId' => $BranchId])
                     ->with('error', 'Student not found!');
}
public function edit($id, $BranchId)  
{
    $student = Student::findOrFail($id);
    return view('student.edit', compact('student', 'BranchId')); 
}

public function update(Request $request, $id, $BranchId)  // Add BranchId parameter here
{
    $student = Student::findOrFail($id);

    // Update student details
    $student->update($request->all());

    // Redirect to the students index page with the BranchId
    return redirect()->route('students.index', ['BranchId' => $BranchId])
                     ->with('success', 'Student details updated successfully!');
}

}
