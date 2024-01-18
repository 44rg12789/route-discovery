<?php

namespace Laravel\RouteDiscovery\Tests\Support\TestClasses\Controllers\Middleware;

use Laravel\RouteDiscovery\Attributes\Route;
use Laravel\RouteDiscovery\Tests\Support\TestClasses\Middleware\TestMiddleware;

class MiddlewareOnMethodController
{
    #[Route(middleware: TestMiddleware::class)]
    public function extraMiddleware()
    {
    }

    public function noExtraMiddleware()
    {
    }
}
