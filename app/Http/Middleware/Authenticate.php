<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Tymon\JWTAuth\JWTAuth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
//        if (! $request->expectsJson()) {
//            return route('login');
//        }
        if(empty($request->header('Authorization'))){
            header('HTTP/1.0 401');
            echo 'Unauthorization Access!!!';
        } else {
            $user = JWTAuth::parseToken()->authenticate();
            print_r($user);
        }
        die();
    }
}
