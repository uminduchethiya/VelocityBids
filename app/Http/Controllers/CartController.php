<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    //
    public function viewCart(Request $request)
    {
        //  dd($request);
        if (Auth::check()) {
            $userId = Auth::id();
            $cartItems = Cart::where('user_id', $userId)->get();
            // dd($cartItems);
            $count = $cartItems->pluck('count')->toArray();
            // dd($count);
            $productIds = $cartItems->pluck('product_id')->toArray();
            $Product = Product::whereIn('id', $productIds)->get();

            // dd($products);
            // retun cart view
             return view('user.cart', compact('Product','count'));
        }
        else{
            return view('auth.login');
        }

    }
    public function addCart(Request $request)
    {
        //  dd($request);

        if (Auth::check()) {
            $userId = Auth::id();
            $productId = $request->cid;

            // Check if the user already has the product in their cart
            $existingCart = Cart::where('user_id', $userId)
                                ->where('product_id', $productId)
                                ->first();

            if ($existingCart) {
                // Product already exists in the cart
                return Redirect::back()->with('error', 'Product already exists in the cart');
            }

            $count = $request->has('count') ? $request->count : 1;

            // Create a new Cart instance and save it to the database
            $cart = new Cart();
            $cart->user_id = $userId;
            $cart->product_id = $productId;
            $cart->count = $count;
            $cart->save();

            return Redirect::back()->with('success', 'Product added to cart successfully');

        }  else {
            // User is not authenticated, handle this case accordingly
            return view('auth.login');
        }
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