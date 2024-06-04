<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAkses
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!auth()->check()) { // Check if user is authenticated
            return redirect('/login'); // Redirect to login page
        }elseif (auth()->user()->roles = 'admin') {
            return redirect('/admin'); // Redirect to login page
        } else {
            return redirect('/owner'); // Redirect to login page
        }
        
    }

}
