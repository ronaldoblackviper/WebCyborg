<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Session;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            Session::put('oldUrl', $request->url());
            return route('user.login');
        }
    }
    // public function handle($request, Closure $next, $guard = null){
    //     if(Auth::guard($guard)->guest()){
    //         if($request->ajax() || $request->wantsJson()){
    //             return response('Unauthorized', 401);
    //         }else{
    //             return redirect()->guest('user.login');
    //         }
    //     }
    // }
}
