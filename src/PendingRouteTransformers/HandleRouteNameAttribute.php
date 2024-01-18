<?php

namespace Laravel\RouteDiscovery\PendingRouteTransformers;

use Illuminate\Support\Collection;
use Laravel\RouteDiscovery\PendingRoutes\PendingRoute;
use Laravel\RouteDiscovery\PendingRoutes\PendingRouteAction;

class HandleRouteNameAttribute implements PendingRouteTransformer
{
    /**
     * @param Collection<PendingRoute> $pendingRoutes
     *
     * @return Collection<PendingRoute>
     */
    public function transform(Collection $pendingRoutes): Collection
    {
        $pendingRoutes->each(function (PendingRoute $pendingRoute) {
            $pendingRoute->actions->each(function (PendingRouteAction $action) {
                if (! $routeAttribute = $action->getRouteAttribute()) {
                    return;
                }

                if (! $name = $routeAttribute->name) {
                    return;
                }

                $action->name = $name;
            });
        });

        return $pendingRoutes;
    }
}
