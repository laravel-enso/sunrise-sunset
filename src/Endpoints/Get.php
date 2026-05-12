<?php

namespace LaravelEnso\SunriseSunset\Endpoints;

use Carbon\Carbon;
use Illuminate\Support\Facades\Config;
use LaravelEnso\Api\Contracts\Endpoint;
use LaravelEnso\Api\Contracts\QueryParameters;
use LaravelEnso\Api\Enums\Method;

class Get implements Endpoint, QueryParameters
{
    public function __construct(
        private ?Carbon $startDate = null,
        private ?Carbon $endDate = null
    ) {
    }

    public function method(): Method
    {
        return Method::GET;
    }

    public function url(): string
    {
        return 'https://api.sunrisesunset.io/json';
    }

    public function body(): array
    {
        return [];
    }

    public function parameters(): array
    {
        return [
            'date_start' => $this->startDate->format('Y-m-d'),
            'date_end' => $this->endDate->format('Y-m-d'),
            'lat' => Config::get('enso.sunriseSunset.latitude'),
            'lng' => Config::get('enso.sunriseSunset.longitude'),
        ];
    }
}
