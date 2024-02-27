<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $users=User::get();
        $vehicle=Vehicle::get();
        $userCount=$users->count();
        $vehicleCount=$vehicle->count();

        if ($request->wantsJson()){
            return response()->json([
                'userCount'=>$userCount,
                'vehicleCount'=>$vehicleCount
            ]);

        }
        return view('admin.dashboard',compact('userCount','vehicleCount','vehicle'));
    }




}
