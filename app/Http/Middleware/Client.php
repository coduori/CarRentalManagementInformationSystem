<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Client
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth::check()) {
        
            if (auth::user()->role=="Client") {
                return $next($request);
            }
            else{
                return view('AccessDenied');
            }
        }
        else{
            return app('App\Http\Controllers\Auth\LoginController')->showLoginForm();        }
    }
}
