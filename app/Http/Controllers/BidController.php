<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class BidController extends Controller
{
    public function addBid()
    {
        return view('bid.add-bid');
    }

    public function addBidInfo(Request $request)
    {

        $request->validate([
            'vehicle_type' => 'required',
            'fuel_type' => 'required',
            'mileage' => 'required',
            'year' => 'required',
            'Model' => 'required',
            'Make' => 'required',
            'regnumber' => 'required',
            'Location' => 'required',
            'condescription' => 'required',
            'feadescription' => 'required',
            'image1' => 'required|image|max:2048',
            'image2' => 'required|image|max:2048',
            'image3' => 'required|image|max:2048',
            'image4' => 'required|image|max:2048',
            'image5' => 'required|image|max:2048',

        ],
    );
        $image1Path = $request->file('image1')->store('public/img');
        $image2Path = $request->file('image2')->store('public/img');
        $image3Path = $request->file('image3')->store('public/img');
        $image4Path = $request->file('image4')->store('public/img');
        $image5Path = $request->file('image5')->store('public/img');


        $vehicle = new Vehicle();
        $vehicle->vehicle_type = $request->input('vehicle_type');
        $vehicle->fuel_type = $request->input('fuel_type');
        $vehicle->mileage = $request->input('mileage');
        $vehicle->year = $request->input('year');
        $vehicle->Model = $request->input('Model');
        $vehicle->Make = $request->input('Make');
        $vehicle->regnumber = $request->input('regnumber');
        $vehicle->Location = $request->input('Location');
        $vehicle->condescription = $request->input('condescription');
        $vehicle->feadescription = $request->input('feadescription');
        $vehicle->image1 =$image1Path;
        $vehicle->image2 =$image2Path;
        $vehicle->image3 =$image3Path;
        $vehicle->image4 =$image4Path;
        $vehicle->image5 =$image5Path;
        // dd($vehicle);

        $vehicle->save();
        return redirect()->back()->with('success', 'Bid information added successfully.');



    }
    // public function vehicleIndex($id){
    //     $vehicle=Vehicle::find($id);
    //     dd($vehicle);
    //     return view('user.home',compact('vehicle'));

    // }

}
