<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;


class AuthController extends Controller
{
    public function login_index()
    {
        return view('auth.login');
    }
    public function register_index()
    {
        return view('auth.register');
    }


    public function user_register(Request $request)
    {
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

            // Format the date using Carbon
            $user->dob = Carbon::createFromFormat('m/d/Y', $request->input('dob'))->format('Y-m-d');

            $user->gender = $request->input('gender');

            // Save the user to the database
            $user->save();

            return redirect('login')->with('success', 'Registration successful! Please log in.');
        } catch (ValidationException $e) {
            return redirect('register')
                ->withErrors($e->errors())
                ->withInput();
        }
    }
}