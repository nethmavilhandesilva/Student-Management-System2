<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\branch;

class BranchersController extends Controller
{
    public function index($BranchId)
    {
        $BranchData = Branch::where('BranchID', $BranchId)->get();
        return view('Branch.branch', compact('BranchData', 'BranchId'));
    }

    public function create($BranchId): View
    {
        return view('Branch.create', compact('BranchId'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'Name' => 'required|string|max:255',
            'BranchID' => 'required|string|max:255',
            'Location' => 'required|string|max:255',
        ]);

        Branch::create($request->all());

        return redirect()->route('branches.index', ['BranchId' => $request->BranchID])
                         ->with('success', 'Branch added successfully!');
    }
    public function destroy($id, $BranchId)
{
    // Find the student by ID
    $Branch = branch::find($id);

    // If the student exists, delete it
    if ($Branch) {
        $Branch->delete();
        return redirect()->route('branches.index', ['BranchId' => $BranchId])
                         ->with('success', 'Branch record deleted successfully!');
    }

    return redirect()->route('branches.index', ['BranchId' => $BranchId])
                     ->with('error', 'Branch not found!');
}
public function edit($id, $BranchId)  
{
    // Fetch the branch by ID
    $branch = Branch::findOrFail($id);
    
    // Return the edit view with branch and BranchId
    return view('Branch.edit', compact('branch', 'BranchId')); 
}

public function update(Request $request, $id, $BranchId)  
{
    // Fetch the branch by ID
    $branch = Branch::findOrFail($id);
    
    // Validate the incoming request (optional but recommended)
    $request->validate([
        'Name' => 'required|string|max:255',
        'Location' => 'required|string|max:255',
        // Add other validation rules as needed
    ]);

    // Update branch details
    $branch->update($request->all());

    // Redirect to the branches index page with the BranchId
    return redirect()->route('branches.index', ['BranchId' => $BranchId])
                     ->with('success', 'Branch details updated successfully!');
}

}

