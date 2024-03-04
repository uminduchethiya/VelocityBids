<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function addCart(Request $request)
    {
        //  dd($request);

        // retun cart view
        return view('user.cart');
    }

    public function cartView($id){
        $product=Product::find($id);
        $user=User::find($id);
        return view('user.cart',compact('product','user'));
    }

    public function cheackout(){
        return view('user.checkout');
    }

    public function payment(){
        return view('user.payment');
    }
}
