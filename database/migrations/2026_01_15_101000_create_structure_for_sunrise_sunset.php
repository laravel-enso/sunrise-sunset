<?php

use LaravelEnso\Migrator\Database\Migration;

return new class extends Migration
{
    protected array $permissions = [
        ['name' => 'sunriseSunset.index', 'description' => 'Call Api Sunrise-Sunset', 'is_default' => false],
    ];
};
