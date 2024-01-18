<?php

namespace Laravel\RouteDiscovery\Tests\Support\TestClasses\Middleware;

use Closure;
use Illuminate\Http\Request;

class OtherTestMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
    }
}
