<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if user is logged in
        if (!Auth::check()) {
            return redirect('/')->with('error', 'Please login first.');
        }

        // Check if user is admin
        if (!Auth::user()->is_admin) {
            return redirect('/')->with('error', 'Unauthorized access. Admin only.');
        }

        return $next($request);
    }
}
