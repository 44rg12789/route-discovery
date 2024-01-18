<?php

namespace Laravel\RouteDiscovery\Tests\Support\TestClasses\Controllers\DoNotDiscoverController;

use Laravel\RouteDiscovery\Attributes\DoNotDiscover;

#[DoNotDiscover]
class DoNotDiscoverController
{
    public function doNotDiscoverThisController()
    {
    }
}
