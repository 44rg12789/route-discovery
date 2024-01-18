<?php

namespace Laravel\RouteDiscovery\PendingRouteTransformers;

use Illuminate\Support\Collection;
use Laravel\RouteDiscovery\Attributes\DoNotDiscover;
use Laravel\RouteDiscovery\PendingRoutes\PendingRoute;
use Laravel\RouteDiscovery\PendingRoutes\PendingRouteAction;

class HandleDoNotDiscoverAttribute implements PendingRouteTransformer
{
    /**
     * @param Collection<PendingRoute> $pendingRoutes
     *
     * @return Collection<PendingRoute>
     */
    public function transform(Collection $pendingRoutes): Collection
    {
        return $pendingRoutes
            ->reject(fn (PendingRoute $pendingRoute) => $pendingRoute->getAttribute(DoNotDiscover::class))
            ->each(function (PendingRoute $pendingRoute) {
                $pendingRoute->actions = $pendingRoute
                    ->actions
                    ->reject(fn (PendingRouteAction $action) => $action->getAttribute(DoNotDiscover::class));
            });
    }
}
