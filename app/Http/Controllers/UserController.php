<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
