<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ValidUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if(Auth::user()->role === 'lawyer'){
        //     return $next($request);
        //     // return redirect()->route("Dashboard");
        // }
        if(Auth::user()->role === 'user' || Auth::user()->role === 'admin' || Auth::guard('lawyers')->user()->role === 'lawyers'){
            return $next($request);
            // return redirect()->route("Dashboard");
        }
        if(!Auth::user()->role === 'user' || !Auth::user()->role === 'admin'){
            return redirect()->route("Legalt");
        }
        if (Auth::guard('lawyers')->check()) {
            if(Auth::guard('lawyers')->user()->role === 'lawyer'){
                // return redirect()->route("Dashboard");
                return $next($request);
            }
            else{
                return redirect()->route("Lawyer");
            }
        }
        return $next($request);
        // echo "<h1>Middle ware</h1>";
    }
}


// if(!Cookie::get("password_confirmed")){
        //     return redirect()->route("User_Panel");
        // }