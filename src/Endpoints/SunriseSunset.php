<?php

namespace LaravelEnso\SunriseSunset\Endpoints;

use Illuminate\Support\Facades\Config;
use LaravelEnso\Api\Contracts\Endpoint;
use LaravelEnso\Frisbo\Enums\Methods;

class SunriseSunset implements Endpoint
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
        return[
            'lat' => Config::get('enso.sunriseSunset.latitude'),
            'lng' => Config::get('enso.sunriseSunset.latitude'),
        ];
    }
}
