<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!Auth::user() || !Auth::user()->is_admin) {
            return redirect('/home')->withErrors(['You do not have access to this area.']);
        }
        return $next($request);
    }
}
