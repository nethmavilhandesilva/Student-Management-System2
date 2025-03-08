<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\branch;

class BranchersController extends Controller
{
    public function index($BranchId){
        $BranchData = branch::where('BranchId', $BranchId)
        ->select('*')
        ->get();
    
        return view('dashboard.branch', compact('BranchData', 'BranchId'));
    }
}
