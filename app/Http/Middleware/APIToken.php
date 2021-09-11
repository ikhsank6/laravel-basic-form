<?php

namespace App\Http\Middleware;

use Closure;

class APIToken
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
        $token=$request->header('Authorization');
        if($token != '$2y$06$9DA3FQogXuK/Lk6FNehW/uyVxHsJ5D9ddrnnP8SorotvjxXhfEJVW'){
            return response()->json(['message'=>'Access denied because unauthorized'],401);
        }
        return $next($request);
    }
}
