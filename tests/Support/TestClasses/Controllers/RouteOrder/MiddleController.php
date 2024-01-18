<?php

namespace Laravel\RouteDiscovery\Tests\Support\TestClasses\Controllers\RouteOrder;

use Laravel\RouteDiscovery\Attributes\Route;

class MiddleController
{
    #[Route(fullUri: '{parameter}/extra')]
    public function invoke()
    {
    }
}
