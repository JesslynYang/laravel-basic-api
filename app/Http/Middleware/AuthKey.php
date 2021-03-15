<?php

namespace App\Http\Middleware;

use Closure;

class AuthKey
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
        $token = $request->get("APP_KEY");

        if($token !== "thisisthekey") {
            return response()->json(["message" => "Auth key not found!"], 401);    
        }
        return $next($request);
    }
}
