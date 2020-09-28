<?php

namespace App\Http\Middleware;

use Closure;

class MembreMiddleware
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
         if (Auth::user()->usertype == 'membre') {
             return $next($request);
         }
         if (Auth::user()->usertype == 'chef') {
             return $next($request);
         }
         else{
            return redirect('/home')->with('status','You are not Allowed to Dashboard');
         }

     }
}
