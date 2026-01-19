<?php

namespace LaravelEnso\SunriseSunset\Actions;

use Carbon\Carbon;
use LaravelEnso\Api\Action;
use LaravelEnso\SunriseSunset\Endpoints\Get as Endpoint;

class Get extends Action
{
    public function __construct(
        private ?Carbon $startDate = null,
        private ?Carbon $endDate = null
    ) {
    }

    protected function endpoint(): Endpoint
    {
        return new Endpoint($this->startDate, $this->endDate);
    }
}
