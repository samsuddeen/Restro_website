<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth; // Add this line

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()->role == 'admin') // Change Auth::User() to Auth::user()
        {
            return $next($request);
        } else {
            return redirect('/login')->with('status','You Are Not Allowed To Admin Dashboard');
        }


    }
}
