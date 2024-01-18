<?php

namespace Laravel\RouteDiscovery\Tests\Support\TestClasses\Controllers\Middleware;

use Laravel\RouteDiscovery\Attributes\Route;
use Laravel\RouteDiscovery\Tests\Support\TestClasses\Middleware\OtherTestMiddleware;
use Laravel\RouteDiscovery\Tests\Support\TestClasses\Middleware\TestMiddleware;

#[Route(middleware: TestMiddleware::class)]
class MiddlewareOnControllerController
{
    public function oneMiddleware()
    {
    }

    #[Route(middleware: OtherTestMiddleware::class)]
    public function twoMiddleware()
    {
    }
}
