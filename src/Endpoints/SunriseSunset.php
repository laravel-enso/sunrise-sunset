<?php

namespace LaravelEnso\SunriseSunset\Endpoints;

use Illuminate\Support\Facades\Config;
use LaravelEnso\Api\Contracts\Endpoint;
use LaravelEnso\Api\Contracts\QueryParameters;
use LaravelEnso\Frisbo\Enums\Methods;

class SunriseSunset implements Endpoint, QueryParameters
{
    public function method(): string
    {
        return Methods::get;
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
            'lat' => Config::get('enso.sunriseSunset.latitude'),
            'lng' => Config::get('enso.sunriseSunset.longitude'),
        ];
    }
}
