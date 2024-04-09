<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if(auth()->check()) {
            return $next($request);
        } else {
            auth()->logout();
            session()->invalidate();
            session()->regenerateToken();
            return Redirect('login')->with('message', __('auth.failed'));
        }
    }
}
