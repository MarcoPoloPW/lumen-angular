<?php

namespace MarcoPoloPW\LaravelAngular\Provider;

use MarcoPoloPW\LaravelAngular\Provider\LaravelAngularServiceProvider;

class LaravelServiceProvider extends LaravelAngularServiceProvider
{
    public function boot()
    {
        $this->registerResponseMacros();

        $this->registerCommands();
    }
}
