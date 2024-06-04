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
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (!auth()->check()) { // Check if user is authenticated
            return redirect('/login'); // Redirect to login page
        }
    
        if (auth()->user()->roles == $role) {
            return $next($request);
        }
    
        return redirect('/'); // Redirect to default page
    }

}
