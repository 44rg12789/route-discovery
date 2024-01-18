<?php

namespace Laravel\RouteDiscovery\Tests\Support\TestClasses\Controllers\DoNotDiscoverMethod;

use Laravel\RouteDiscovery\Attributes\DoNotDiscover;

class DoNotDiscoverMethodController
{
    public function method()
    {
    }

    #[DoNotDiscover]
    public function doNotDiscoverMethod()
    {
    }
}
