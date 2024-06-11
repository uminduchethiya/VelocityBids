<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            // Check if the user has the 'admin' role
            if (Auth::user()->role === 'admin') {
                return $next($request);
            }
        }

        // If not authenticated or not an admin, redirect or handle as needed
        return redirect()->route('home')->with('error', 'Unauthorized access.');
    }
}
