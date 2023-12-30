<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Closure;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use App\Providers\RouteServiceProvider;

class UserAccess
{
    /**
     * Handle an incoming request.
     * @param \Illuminate\Http\Request $request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $userType) 
    {
        if(auth()->user()->userType == $userType) {
            return $next($request);

        }

        return redirect()->back()->with('error', 'You do not have permission to access this page. Please log in first.');

    }
}