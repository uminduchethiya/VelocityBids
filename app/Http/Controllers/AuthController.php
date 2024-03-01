<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail; // Add this import
use Illuminate\Support\Str;



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


public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Authentication passed
        if (Auth::user()->role == 'admin') {
            return redirect()->intended('/admin/dashboard');
        } elseif (Auth::user()->role == 'user') {
            return redirect()->intended('/home');
        }
    }

    // Authentication failed
    return redirect()->back()->withErrors(['login' => 'Invalid email or password.']);
}


    public function forgetpassword_index(){
        return view('auth.forgetpassword');
    }

    public function forgetpasswordPost(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users'
        ]);

        $token = Str::random(64);

        // Insert the password reset data into the 'password_reset' table
        DB::table('password_reset')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => now() // Using the helper function now() instead of Carbon::now()
        ]);

        try {
            // Send an email with the password reset link
            Mail::send('auth.emails.forget_password', ['token' => $token], function ($message) use ($request) {
                $message->to($request->email);
                $message->subject('Reset Password');
            });

            // Redirect with success message if the email is sent successfully
            return redirect()->to(route("forgetpassword"))->with("success", "We have sent an email to reset your password.");

        } catch (\Exception $e) {
            // Redirect with error message if there is an issue with sending the email
            return redirect()->to(route("forgetpassword"))->with("error", "Sorry, we couldn't send the password reset email. Please try again.");
        }
    }



        public function resetpassword_index($token){
            return view('auth.resetpassword',compact('token'));
        }

        public function resetpasswordPost(Request $request){
            $request->validate([
                "new_password" => "required|string|min:8|confirmed",
                "new_password_confirmation" => "required"
            ]);

            $updatePassword = DB::table('password_reset')->where([
                "token" => $request->token
            ])->first();

            if (!$updatePassword) {
                return redirect()->route("resetpassword")->with("error", "invalid");
            }

            // Retrieve the user email from the password_resets table
            $userEmail = $updatePassword->email;

            // Update user password in the users table
            User::where("email", $userEmail)->update(["password" => Hash::make($request->new_password)]);

            // Delete the entry from the password_resets table
            DB::table("password_reset")->where(["email" => $userEmail])->delete();

            return redirect()->route("forgetpassword")->with("success", "Password reset successful. An email has been sent.");
        }
}
