<?php

namespace LaravelEnso\SunriseSunset\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use LaravelEnso\SunriseSunset\Actions\Call;

class Index extends Controller
{
    public function __invoke(Request $request)
    {
        return (new Call())->handle()->json();
    }
}
