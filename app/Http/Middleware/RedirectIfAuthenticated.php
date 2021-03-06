<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::check() && (Auth::user()->user_type=="admin")){
            return redirect()->route('dashboard.admin');
        }
        if (Auth::guard($guard)->check()) {
            return redirect()->route('product.index');
        }

        return $next($request);
    }
}
