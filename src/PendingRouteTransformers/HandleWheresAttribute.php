<?php

namespace Laravel\RouteDiscovery\PendingRouteTransformers;

use Illuminate\Support\Collection;
use Laravel\RouteDiscovery\Attributes\Where;
use Laravel\RouteDiscovery\PendingRoutes\PendingRoute;
use Laravel\RouteDiscovery\PendingRoutes\PendingRouteAction;

class HandleWheresAttribute implements PendingRouteTransformer
{
    /**
     * @param Collection<PendingRoute> $pendingRoutes
     *
     * @return Collection<PendingRoute>
     */
    public function transform(Collection $pendingRoutes): Collection
    {
        $pendingRoutes->each(function (PendingRoute $pendingRoute) {
            $pendingRoute->actions->each(function (PendingRouteAction $action) use ($pendingRoute) {
                if ($pendingRouteWhereAttribute = $pendingRoute->getAttribute(Where::class)) {
                    $action->addWhere($pendingRouteWhereAttribute);
                }

                if ($actionWhereAttribute = $action->getAttribute(Where::class)) {
                    $action->addWhere($actionWhereAttribute);
                }
            });
        });

        return $pendingRoutes;
    }
}
