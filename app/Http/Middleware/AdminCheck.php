<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminCheck
{

    public function handle(Request $request, Closure $next): Response
    {
        // if the user is login
        if (Auth::check()) {
            // if the user is not admin
            if (Auth::user()->role === "admin") {
                // allow
                return $next($request);
            } else {
                abort(403, "You are not a admin ,please contact support");
            }
        } else {
            abort("403", "You are not logged in ");
        }
    }
}
