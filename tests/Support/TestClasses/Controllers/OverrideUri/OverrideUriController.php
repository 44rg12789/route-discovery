<?php

namespace Laravel\RouteDiscovery\Tests\Support\TestClasses\Controllers\OverrideUri;

use Laravel\RouteDiscovery\Attributes\Route;

class OverrideUriController
{
    #[Route(uri:'alternative-uri')]
    public function myMethod()
    {
    }
}
