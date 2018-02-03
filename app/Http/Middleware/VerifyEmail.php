<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Session;

class VerifyEmail
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
        if(!Auth::user()->verified){
            Session::flash('error_danger', 'Please verify your email first');
            
            return redirect()->route('user.verifyEmail');
        }

        return $next($request);
    }
}
