<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function addCart(Request $request)
    {
        //  dd($request);
        $id=$request->cid;
        $Product=Product::find($id);
        // retun cart view
        return view('user.cart', compact('Product'));
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
