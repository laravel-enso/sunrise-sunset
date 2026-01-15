<?php

use Illuminate\Support\Facades\Route;
use LaravelEnso\SunriseSunset\Http\Controllers\Index;

Route::middleware(['api', 'auth', 'core'])
    ->prefix('api/sunriseSunset')
    ->as('sunriseSunset.')
    ->group(function () {
        Route::get('', Index::class)->name('createIndex');
    });
