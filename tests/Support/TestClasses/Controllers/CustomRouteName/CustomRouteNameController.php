<?php

namespace Laravel\RouteDiscovery\Tests\Support\TestClasses\Controllers\CustomRouteName;

use Laravel\RouteDiscovery\Attributes\Route;

class CustomRouteNameController
{
    #[Route(name:'this-is-a-custom-name')]
    public function index()
    {
    }
}
