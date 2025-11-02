<?php

namespace Vishwaraj\Laraflow\Providers;

use Illuminate\Support\ServiceProvider;

class LaraflowServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'laraflow-views');
    }
}
