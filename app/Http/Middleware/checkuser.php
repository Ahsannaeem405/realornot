<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkuser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        return $next($request);

        if(\Auth::login())
        {

            return $next($request);
        }
        else
        {
            return redirect('/login');

        }
    }
}
