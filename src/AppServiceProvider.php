<?php

namespace LaravelEnso\SunriseSunset;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->load();
    }

    private function load()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/api.php');

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->mergeConfigFrom(__DIR__.'/../config/sunriseSunset.php', 'enso.sunriseSunset');
    }
}
