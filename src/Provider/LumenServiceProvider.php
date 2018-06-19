<?php

namespace MarcoPoloPW\LaravelAngular\Provider;

use MarcoPoloPW\LaravelAngular\Provider\LaravelAngularServiceProvider;

class LumenServiceProvider extends LaravelAngularServiceProvider
{
    public function boot()
    {
        $this->registerResponseMacros();
    }
}
