<?php

namespace Laravel\RouteDiscovery\PendingRouteTransformers;

use App\Http\Controllers\Controller as DefaultAppController;
use Illuminate\Routing\Controller;
use Illuminate\Support\Collection;
use Laravel\RouteDiscovery\PendingRoutes\PendingRoute;
use Laravel\RouteDiscovery\PendingRoutes\PendingRouteAction;
use Laravel\RouteDiscovery\Tests\Support\TestClasses\Controllers\DefaultController\ControllerWithDefaultLaravelTraits;

class RejectDefaultControllerMethodRoutes implements PendingRouteTransformer
{
    /**
     * @var array<int, string>
     */
    public array $rejectMethodsInClasses = [
        ControllerWithDefaultLaravelTraits::class,
        DefaultAppController::class,
        Controller::class,
    ];

    /**
     * @param Collection<PendingRoute> $pendingRoutes
     *
     * @return Collection<PendingRoute>
     */
    public function transform(Collection $pendingRoutes): Collection
    {
        return $pendingRoutes->each(function (PendingRoute $pendingRoute) {
            $pendingRoute->actions = $pendingRoute
                ->actions
                ->reject(fn (PendingRouteAction $pendingRouteAction) => in_array(
                    $pendingRouteAction->method->class,
                    $this->rejectMethodsInClasses
                ));
        });
    }
}
