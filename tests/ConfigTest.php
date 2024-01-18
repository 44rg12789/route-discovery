<?php

use Illuminate\Routing\ViewController;

it('can discover controllers in a directory', function () {
    config()->set('route-discovery.discover_controllers_in_directory', [
        controllersPath('Single'),
    ]);

    $this->registerControllersFromConfigFile();

    expect(true)->toBeTrue();
});

