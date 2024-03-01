<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(Request $request ,$id=null){

        $category = Category::get();
        $product = null;

        if ($id) {
            $product = Product::find($id);
            //dd($product);
        }
        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'category' => $category,
                'product' => $product
            ]);
        }
        return view('admin.products.addProduct' ,compact('category','product'));
    }

    public function addProduct(Request $request) {
        // Validate the incoming request data

        $request->validate([
            'product_name' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'selling_price' => 'required',
            'short_des' => 'required',
            'description' => 'required',
            'image1' => 'required|image|max:2048',
            'image2' => 'required|image|max:2048',
            'image3' => 'required|image|max:2048',
            'image4' => 'required|image|max:2048',
            'image5' => 'required|image|max:2048',
        ],);

        // Store the images in the storage directory


        $image1Path = $request->file('image1')->store('public/img');
        $image2Path = $request->file('image2')->store('public/img');
        $image3Path = $request->file('image3')->store('public/img');
        $image4Path = $request->file('image4')->store('public/img');
        $image5Path = $request->file('image5')->store('public/img');

        $product = new Product();
        $product->product_name = $request->input('product_name');
        $product->category_id = $request->input('category_id');
        $product->price = $request->input('price');
        $product->selling_price = $request->input('selling_price');
        $product->short_des = $request->input('short_des');
        $product->description = $request->input('description');
        $product->image1 = $image1Path;
        $product->image2 = $image2Path;
        $product->image3 = $image3Path;
        $product->image4 = $image4Path;
        $product->image5 = $image5Path;
        // dd($product);



        // Save the product to the database
        $product->save();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Product information added successfully.');
    }

}
