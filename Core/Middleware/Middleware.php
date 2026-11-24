<?php

namespace Core\Middleware;

use Core\Middleware\Auth;
use Core\Middleware\Guest;

class Middleware {

    const MAP = [
        'auth'=> Auth::class,
        'guest'=> Guest::class
    ];

    public static function resolve($key){
        
        $middleware = Middleware::MAP[$key] ?? false;

        if(!$middleware){
            throw new \Exception("{$key} middleware not found");
        }

        (new $middleware) -> handle();
    
    }
}

