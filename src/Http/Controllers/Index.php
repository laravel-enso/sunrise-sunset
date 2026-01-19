<?php

namespace LaravelEnso\SunriseSunset\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use LaravelEnso\SunriseSunset\Actions\Get;

class Index extends Controller
{
    public function __invoke(Request $request)
    {
        return (new Get())->handle()->json();
    }
}
