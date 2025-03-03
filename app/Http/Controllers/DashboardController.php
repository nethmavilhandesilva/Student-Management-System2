<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index($BranchId)
    {
        return view('dashboard.dashboard', compact('BranchId'));
    }
    
}
