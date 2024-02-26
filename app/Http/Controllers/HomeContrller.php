<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
class HomeContrller extends Controller
{
    public function index(){
        $vehicles = Vehicle::all(); // Fetch all vehicles from the database

        return view('user.home', compact('vehicles'));
    }
}
