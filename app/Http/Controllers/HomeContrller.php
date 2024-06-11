<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeContrller extends Controller
{
    public function index()
    {
        // Fetch vehicles where the action is 'Available'
        $vehicles = Vehicle::where('action', 'Available')->get();

        return view('user.home', compact('vehicles'));
    }

    public function viewAllVehicle() {
        $vehicles = Vehicle::where('action', 'Available')->latest()->paginate(12);
        return view('user.allVehicle', compact('vehicles'));
    }
    public function shop(){
        $categories = Product::all();
        return view('user.shop',compact('categories'));
    }
    public function Searchshop(Request $request){
        $searchTerm = $request->input('search');

        $categories = Product::where('product_name', 'like', '%' . $searchTerm . '%')
        ->orWhereHas('category', function ($query) use ($searchTerm) {
            $query->where('category_name', 'like', '%' . $searchTerm . '%');
        })
        ->get();
        return view('user.shop',compact('categories'));
    }

}
