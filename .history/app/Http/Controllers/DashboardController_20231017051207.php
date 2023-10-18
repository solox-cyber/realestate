<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Feature;
use App\Models\Listing;
use App\Models\Location;
use App\Models\ListingImage;
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
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required',
            'location_id' => 'required',
            'agent_id' => 'required',
            'address' => 'required',
            'cost' => 'required',
            'status' => 'required',
            'details' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:20048' // Adjust the validation rules as per your requirements
        ]);

        // Store the listing details in the database
        $listing = new Listing();
        $listing->name = $request->name;
        $listing->location_id = $request->location_id;
        $listing->agent_id = $request->agent_id;
        $listing->address = $request->address;
        $listing->cost = $request->cost;
        $listing->status = $request->status;
        $listing->details = $request->details;
        $listing->save();

        // Handle file uploads
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $file) {
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('images/listings'), $fileName);

                // Save the file path to the database
                $image = new ListingImage();
                $image->path = $fileName;
                $listing->images()->save($image);
            }
        }

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Listing created successfully!');
    }

    public function listingedit(Listing $listing)
    {
        // Fetch locations and agents for the form
        $locations = Location::all();
        $agents = Agent::all();

        return view('admin.edit_listing', compact('listing', 'locations', 'agents'));
    }


    public function listingupdate(Request $request, $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required',
            'location_id' => 'required',
            'agent_id' => 'required',
            'address' => 'required',
            'cost' => 'required',
            'status' => 'required',
            'details' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:20048' // Adjust the validation rules as per your requirements
        ]);

        // Find the listing by ID
        $listing = Listing::findOrFail($id);

        // Update the listing details in the database
        $listing->name = $request->name;
        $listing->location_id = $request->location_id;
        $listing->agent_id = $request->agent_id;
        $listing->address = $request->address;
        $listing->cost = $request->cost;
        $listing->status = $request->status;
        $listing->details = $request->details;
        $listing->save();

        // Handle file uploads if the request has files
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $file) {
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('images/listings'), $fileName);

                // Save the file path to the database
                $listingImage = new ListingImage(['path' => $fileName]);
                $listing->images()->save($listingImage);
            }
        }

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Listing updated successfully!');
    }



    public function listingdestroy(Listing $listing)
    {
        // Delete the associated images
        foreach ($listing->images as $image) {
            // Delete the image file from the storage
            if (file_exists(public_path('images/listings/' . $image->path))) {
                unlink(public_path('images/listings/' . $image->path));
            }
            // Delete the image entry from the database
            $image->delete();
        }

        // Delete the listing
        $listing->delete();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Listing and associated images deleted successfully!');
    }

    public function featureslist()
    {
        $features = Feature::all();
        return view('admin.features_listing', compact('features'));
    }

    public function featuresnew()
    {
        $listings = Listing::all();
        return view('admin.features_detail', compact('listings'));
    }

    public function featuresstore(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'listing_id' => 'required|unique:features',
            'baths' => 'required',
            'bedrooms' => 'required',
            'rooms' => 'required',
            'kitchens' => 'required',
            'livingrooms' => 'required',
            'area' => 'required',
            'year_built' => 'required',
            'garages' => 'required',
            'bathrooms' => 'required',
            'plot_size' => 'required'
        ]);

        // Create a new feature instance
        $feature = new Feature();
        $feature->listing_id = $request->listing_id;
        $feature->baths = $request->baths;
        $feature->bedrooms = $request->bedrooms;
        $feature->rooms = $request->rooms;
        $feature->kitchens = $request->kitchens;
        $feature->livingrooms = $request->livingrooms;
        $feature->area = $request->area;
        $feature->year_built = $request->year_built;
        $feature->garages = $request->garages;
        $feature->bathrooms = $request->bathrooms;
        $feature->plot_size = $request->plot_size;
        $feature->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Feature details added successfully!');
    }


    public function featuresedit($id)
    {
        // Fetch the feature by ID
        $feature = Feature::find($id);

        // Return the view for editing the feature
        return view('admin.edit_feature', compact('feature'));
    }

    public function featuresdestroy($id)
    {
        // Find the feature by ID
        $feature = Feature::find($id);

        if ($feature) {
            // Delete the image from the directory
            if ($feature->listingImage) {
                $imagePath = public_path('images/listings/' . $feature->listingImage->path);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }

            // Delete the feature
            $feature->delete();

            // Redirect back with a success message
            return redirect()->back()->with('success', 'Feature and associated image deleted successfully!');
        } else {
            // If the feature doesn't exist, redirect back with an error message
            return redirect()->back()->with('error', 'Feature not found!');
        }
    }
}
