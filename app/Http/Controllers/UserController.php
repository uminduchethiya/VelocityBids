<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Models\User;



class UserController extends Controller
{
    public function contact()
    {
        return view('user.contact');
    }
    public function about()
    {
        return view('user.about');
    }


public function   submitForm(Request $request)
{
    // Validate the form data
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string',
    ]);

    // Send email
    $details = [
        'name' => $request->name,
        'email' => $request->email,
        'message' => $request->message,
    ];

    Mail::to('uminduchethiya@gmail.com')->send(new ContactFormMail($details));

    // Redirect back with success message or do any other actions
    return back()->with('success', 'Message sent successfully!');
}

public function view(Request $request){
    $users = User::all();
    // dd($users);
    return view('admin.users.customerList', compact('users'));
}

public function edit($id){
    $user=User::find($id);
   // dd($user);
    return view('admin.users.customerEdit',compact('user'));
}
public function update(Request $request,$id){
    $user=User::find($id);
    $request->validate([
        'f_name'=>'required',
        'l_name'=>'required',
        'email'=>'required',
        'c_number'=>'required',
        // 'dob'=>'required',
        'gender'=>'required',
    ]);
    $user->update([
        'f_name'=>$request->input('f_name'),
        'l_name'=>$request->input('l_name'),
        'c_number'=>$request->input('c_number'),
        'email'=>$request->input('email'),
        // 'dob'=>$request->input('dob'),
        'gender'=>$request->input('gender'),

    ]);
    return redirect()->route('admin.customerlist')->with('success', 'User updated successfully');
}

public function destroy(Request $request, User $user){
    if(!$user){
        return redirect()->route('/admin/customerlist')
                ->with('error', 'User not found');
        }

        $user->delete();

        return redirect()->intended('/admin/customerlist')
            ->with('success', 'User deleted sucessfully');

    }


}
