<?php

namespace Laravel\RouteDiscovery\Tests\Support\TestClasses\Controllers\RouteOrder;

use Laravel\RouteDiscovery\Attributes\Route;

class AAAController
{
    #[Route(fullUri: '{parameter}')]
    public function invoke()
    {
    }
}
