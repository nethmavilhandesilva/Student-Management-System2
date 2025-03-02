<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index($customerId)
    {
        return view('dashboard.dashboard', compact('customerId'));
    }
    
}
