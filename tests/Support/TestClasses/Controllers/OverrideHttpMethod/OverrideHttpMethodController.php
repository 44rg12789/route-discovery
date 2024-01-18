<?php

namespace Laravel\RouteDiscovery\Tests\Support\TestClasses\Controllers\OverrideHttpMethod;

use Illuminate\Foundation\Auth\User;
use Laravel\RouteDiscovery\Attributes\Route;

class OverrideHttpMethodController
{
    #[Route(method: 'delete')]
    public function edit(User $user)
    {
    }
}
