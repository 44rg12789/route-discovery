<?php

namespace Laravel\RouteDiscovery\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS | Attribute::TARGET_METHOD)]
class DontDiscover implements DiscoveryAttribute
{
}
