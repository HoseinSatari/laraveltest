<?php


namespace Hitler\Cms\Middleware;


use Closure;

class Admin
{
    public function handle($request, Closure $next)
    {
        dd('hello bech');
        return $next($request);
    }
}
