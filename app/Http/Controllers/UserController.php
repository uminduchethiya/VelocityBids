<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;



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
public function adminRegister(){
    return view('admin.users.adminRegister');
}
public function adminsRegister(Request $request){
    // dd($request);
    try {
        $validator = Validator::make($request->all(), [
            'f_name' => 'required',
            'l_name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'c_number' => ['required', 'regex:/^0\d{9}$/'],
            'dob' => 'required|date', // Ensure the dob is a valid date
            'gender' => 'required|in:male,female',
            'c_password' => 'required|confirmed',
        ], [
            'c_number.required' => 'The phone number is required.',
            'c_number.regex' => 'The phone number must have 10 digits and start with "0".',
        ]);



        // Check if password and c_password match
        if ($request->input('password') !== $request->input('c_password')) {
            return redirect('register')
                ->withErrors(['password' => 'Password and confirm password do not match.'])
                ->withInput();
        }
        $existingUser = User::where('email', $request->input('email'))->first();

        if ($existingUser) {
            return redirect()->back()->withErrors(['email' => 'The email address is already in use.']);
        }



        $user = new User();
        $user->f_name = $request->input('f_name');
        $user->l_name = $request->input('l_name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->c_number = $request->input('c_number');
        $user->role = $request->input('user');

        // Format the date using Carbon
        $user->dob = Carbon::createFromFormat('m/d/Y', $request->input('dob'))->format('Y-m-d');

        $user->gender = $request->input('gender');

        // Save the user to the database
        $user->save();

        return redirect('login')->with('success', 'Registration successful! Please log in.');
    } catch (ValidationException $e) {
        return redirect('admin.users.adminRegister')
            ->withErrors($e->errors())
            ->withInput();
    }
}
}

