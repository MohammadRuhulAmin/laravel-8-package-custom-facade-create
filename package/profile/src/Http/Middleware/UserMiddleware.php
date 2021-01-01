<?php

//namespace App\Http\Middleware;

namespace TeamBravo\Profile\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {   $x = 2;
        if($x != 1){
            abort(403,"Unauthorized!");
        }
        return $next($request);
    }
}
