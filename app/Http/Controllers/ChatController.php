<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index($BranchId)
    {
        return view('chat.index');
    }

    public function sendMessage(Request $request)
    {
        // Handle saving the message or broadcasting to frontend
    }
}
