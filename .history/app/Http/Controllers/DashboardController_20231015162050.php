<?php

namespace App\Http\Controllers;

use App\Models\Agent;
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
        $agents = Agent::all();
        return view('admin.agents', compact('agents'));
    }

    public function agentnew(){
        return view('admin.agent-details');
    }

    public function agentedit($id)
    {
        $agent = Agent::find($id);
        return view('agents-edit', compact('agent'));
    }

    public function agentstore(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'telephone' => 'required',
            'address' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:12048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images/agents'), $imageName);

        // Save form data to the database
        $agent = new Agent([
            'name' => $data['name'],
            'telephone' => $data['telephone'],
            'address' => $data['address'],
            'email' => $data['email'],
            'image' => $imageName,
        ]);

        $agent->save();

        return redirect()->route('agent.new')->with('success', 'Agent details saved successfully!');
    }

}
