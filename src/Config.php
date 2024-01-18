<?php

namespace Laravel\RouteDiscovery;

use Laravel\RouteDiscovery\PendingRouteTransformers\AddControllerUriToActions;
use Laravel\RouteDiscovery\PendingRouteTransformers\AddDefaultRouteName;
use Laravel\RouteDiscovery\PendingRouteTransformers\HandleDomainAttribute;
use Laravel\RouteDiscovery\PendingRouteTransformers\HandleDoNotDiscoverAttribute;
use Laravel\RouteDiscovery\PendingRouteTransformers\HandleFullUriAttribute;
use Laravel\RouteDiscovery\PendingRouteTransformers\HandleHttpMethodsAttribute;
use Laravel\RouteDiscovery\PendingRouteTransformers\HandleMiddlewareAttribute;
use Laravel\RouteDiscovery\PendingRouteTransformers\HandleRouteNameAttribute;
use Laravel\RouteDiscovery\PendingRouteTransformers\HandleUriAttribute;
use Laravel\RouteDiscovery\PendingRouteTransformers\HandleUrisOfNestedControllers;
use Laravel\RouteDiscovery\PendingRouteTransformers\HandleWheresAttribute;
use Laravel\RouteDiscovery\PendingRouteTransformers\MoveRoutesStartingWithParametersLast;
use Laravel\RouteDiscovery\PendingRouteTransformers\RejectDefaultControllerMethodRoutes;

class Config
{
    /**
     * @return array<class-string>
     */
    public static function defaultRouteTransformers(): array
    {
        return [
            RejectDefaultControllerMethodRoutes::class,
            HandleDoNotDiscoverAttribute::class,
            AddControllerUriToActions::class,
            HandleUrisOfNestedControllers::class,
            HandleRouteNameAttribute::class,
            HandleMiddlewareAttribute::class,
            HandleHttpMethodsAttribute::class,
            HandleUriAttribute::class,
            HandleFullUriAttribute::class,
            HandleWheresAttribute::class,
            AddDefaultRouteName::class,
            HandleDomainAttribute::class,
            MoveRoutesStartingWithParametersLast::class,
        ];
    }
}
