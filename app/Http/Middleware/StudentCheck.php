<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class StudentCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
         // if the user is login
        if (Auth::check()) {
            // if the user is not student
            if (Auth::user()->role === "student") {
                // allow
                return $next($request);
            } else {
                abort(403, "You are not a student ,please contact support");
            }
        } else {
            abort(403, "You are not logged in ");
        }
    }
}
