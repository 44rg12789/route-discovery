<?php

namespace Laravel\RouteDiscovery\Tests\Support\TestClasses\Controllers\OverrideFullUri;

use Laravel\RouteDiscovery\Attributes\Route;

class OverrideFullUriController
{
    #[Route(fullUri:'alternative-uri')]
    public function myMethod()
    {
    }
}
