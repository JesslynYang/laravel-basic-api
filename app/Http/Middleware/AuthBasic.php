<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AuthBasic
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
        if(Auth::onceBasic()) {
            return response()->json(['message' => "Auth failed"], 401);
        }
        return $next($request);
    }
}
