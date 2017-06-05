<?php

namespace BrianFaust\Carriers;

use Illuminate\Support\ServiceProvider;

class CarriersServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../database/migrations' => database_path('migrations'),
        ], 'migrations');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->commands(Console\Commands\SeedCarriers::class);
    }
}
