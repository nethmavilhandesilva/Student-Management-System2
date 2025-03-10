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
}

