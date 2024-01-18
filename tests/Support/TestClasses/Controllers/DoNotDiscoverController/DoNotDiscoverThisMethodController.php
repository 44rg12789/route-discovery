<?php

namespace Laravel\RouteDiscovery\Tests\Support\TestClasses\Controllers\DoNotDiscoverController;

use Laravel\RouteDiscovery\Attributes\DoNotDiscover;

class DoNotDiscoverThisMethodController
{
    public function method()
    {
    }

    #[DoNotDiscover]
    public function doNotDiscoverMethod()
    {
    }
}
