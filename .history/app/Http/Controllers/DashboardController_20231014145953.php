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

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'telephone' => 'required',
            'address' => 'required',
            'website' => 'required',
            'contact' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        Agent::create(array_merge($data, ['image' => $imageName]));

        return redirect('/create')->with('success', 'Agent details saved successfully!');
    }
}
