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
        $this->publishes([
            __DIR__ . '/../../public' => public_path('vendor/laraflow'),
        ], 'laraflow-assets');
        // Ensure Vite assets resolve correctly
        if (function_exists('vite')) {
            \Illuminate\Support\Facades\Vite::useHotFile(storage_path('laraflow-vite.hot'));
            \Illuminate\Support\Facades\Vite::useBuildDirectory('vendor/laraflow');
        }
        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'laraflow');
    }
}
