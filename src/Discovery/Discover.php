<?php

namespace Laravel\RouteDiscovery\Discovery;

class Discover
{
    public static function controllers(): DiscoverControllers
    {
        return new DiscoverControllers();
    }
}
