<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

    //category list view
    public function view(Request $request)

    {
        $category=Category::all();
        return view('admin.category.categoryList',compact('category'));
    }

    //category delete
public function destroy(Request $request ,Category $category){
    if(!$category){
        return redirect()->route('/admin/category_list')->with('error','User not found');
    }
    $category->delete();
    return redirect()->intended('/admin/category_list')
            ->with('success', 'User deleted sucessfully');
}
     //category update view

     public function edit($id){
        $category=Category::find($id);

        return view('admin.category.categoryEdit',compact('category'));
     }

    //category update
    public function updatecategory(Request $request ,$id){
        $category=Category::find($id);
        $request->validate([
        'category_name'=>'required',

        ]);
        $category->update([
            'category_name'=>$request->input('category_name'),
        ]);
        return redirect()->route('admin.categorylist')->with('success', 'User updated successfully');
    }



    // add catagory view
    public function viewCategory()
    {
        return view('admin.category.addCategory');
    }


    //post categori
    public function addcategory(Request $request)
    {
        $request->validate([

            'category_name' => 'required',


        ]);
        $category = new Category();
        $category->category_name = $request->input('category_name');
        $category->save();
        return redirect()->back()->with('success', 'Bid information added successfully.');
    }





}
