<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        // Add any necessary logic here
        return view('admin.dashboard');
    }

    public function agentlist(){
        return view('admin.agents');
    }

    public function agentnew(){
        return view('admin.agent-details');
    }
}
