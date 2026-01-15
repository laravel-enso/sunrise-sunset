<?php

namespace LaravelEnso\SunriseSunset\Actions;

use LaravelEnso\Api\Action;
use LaravelEnso\SunriseSunset\Endpoints\SunriseSunset as Endpoint;

class Call extends Action
{
    public function __construct()
    {
    }

    protected function endpoint(): Endpoint
    {
        return new Endpoint();
    }
}
