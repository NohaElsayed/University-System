<?php

namespace App\Http\Middleware;

use Closure;

class PreventLogin
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
        if(!session()->get('name')){
            return redirect()->route('login.student');
        }
        return $next($request);
    }
}
