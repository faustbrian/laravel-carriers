<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Carriers.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
        $this->registerCommands();
    }

    /**
     * Register the console commands.
     */
    private function registerCommands()
    {
        $this->commands(Console\Commands\SeedCarriers::class);
    }
}
