<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
class HomeContrller extends Controller
{
    public function index()
    {
        // Fetch vehicles where the action is 'Available'
        $vehicles = Vehicle::where('action', 'Available')->get();

        return view('user.home', compact('vehicles'));
    }

}
