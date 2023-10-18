<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Listing;
use App\Models\Location;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        // Add any necessary logic here
        return view('admin.dashboard');
    }

    public function agentlist()
    {
        $agents = Agent::all();
        return view('admin.agents', compact('agents'));
    }

    public function agentnew()
    {
        return view('admin.agent-details');
    }

    public function agentedit($id)
    {
        $agent = Agent::find($id);
        return view('admin.agents-edit', compact('agent'));
    }

    public function agentupdate(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'telephone' => 'required',
            'address' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:12048',
        ]);

        $agent = Agent::find($id);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/agents'), $imageName);
            $agent->image = $imageName;
        }

        $agent->name = $data['name'];
        $agent->telephone = $data['telephone'];
        $agent->address = $data['address'];
        $agent->email = $data['email'];

        $agent->save();

        return redirect()->route('agent.list')->with('success', 'Agent details updated successfully!');
    }

    public function agentdelete($id)
    {
        $agent = Agent::find($id);
        $agent->delete();
        return redirect()->route('agent.list')->with('success', 'Agent deleted successfully!');
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

    public function locationlist()
    {
        $locations = Location::all();
        return view('admin.location', compact('locations'));
    }

    public function locationnew()
    {
        return view('admin.location-details');
    }

    public function locationstore(Request $request)
    {
        $data = $request->validate([
            'state' => 'required',
            'town' => 'required',
            'community' => 'required',
            'address' => 'required'
        ]);

        $location = new Location([
            'state' => $data['state'],
            'town' => $data['town'],
            'community' => $data['community'],
            'full_address' => $data['address']
        ]);

        $location->save();

        return redirect()->route('location.list')->with('success', 'Location details saved successfully!');
    }


    public function locationedit($id)
    {
        $location = Location::find($id);
        return view('admin.edit_location', compact('location'));
    }

    public function locationupdate(Request $request, $id)
    {
        // Add validation as per your requirements
        $location = Location::find($id);
        $location->state = $request->state;
        $location->town = $request->town;
        $location->community = $request->community;
        $location->full_address = $request->address;
        $location->save();

        return redirect()->route('location.list')->with('success', 'Location updated successfully!');
    }

    public function locationdestroy($id)
    {
        $location = Location::find($id);
        $location->delete();

        return redirect()->route('location.list')->with('success', 'Location deleted successfully!');
    }


    public function listinglist()
    {
        $listings = Listing::all();
        return view('admin.listings', compact('listings'));
    }


    public function listingnew()
    {
        $locations = Location::all();
        $agents = Agent::all();
        return view('admin.listing-details', compact('locations', 'agents'));
    }

    public function listingstore(Request $request)
        {
            $data = $request->validate([
                'name' => 'required',
                'location' => 'required',
                'agent' => 'required',
                'address' => 'required',
                'cost' => 'required',
                'status' => 'required',
                'details' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:12048',
            ]);

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/listings'), $imageName);

            // Save form data to the database
            $agent = new Listing([
                'name' => $data['name'],
                'location' => $data['location'],
                'agent' => $data['agent'],
                'agent' => $data['agent'],
                'cost' => $data['cost'],
                'status' => $data['status'],
                'details' => $data['details'],
                'image' => $imageName,
            ]);

            $agent->save();

            return redirect()->route('agent.new')->with('success', 'Agent details saved successfully!');
        }
}
