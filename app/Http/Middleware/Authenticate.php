<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        $currenMiddleware = $request->route()->middleware();
        if(!empty($currenMiddleware)&& in_array('auth:account',$currenMiddleware)){
            return route('home');
        }
        // if(!empty($currenMiddleware)&& in_array('auth',$currenMiddleware)){
        //     return route('home');
        // }
        return $request->expectsJson() ? null : route('login');
    }
}

