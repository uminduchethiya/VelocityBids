<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $users=User::get();
        $userCount=$users->count();

        if ($request->wantsJson()){
            return response()->json([
                'userCount'=>$userCount
            ]);

        }
        return view('admin.dashboard',compact('userCount'));
    }




}
