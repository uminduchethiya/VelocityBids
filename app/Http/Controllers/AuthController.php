<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login_index(){
        return view('auth.login');
    }
    public function register_index(){
        return view ('auth.register');
    }
}
