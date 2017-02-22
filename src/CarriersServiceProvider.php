<?php

/*
 * This file is part of Laravel Carriers.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace BrianFaust\Carriers;

use BrianFaust\Carriers\Console\SeedCarriers;
use BrianFaust\ServiceProvider\AbstractServiceProvider;

class CarriersServiceProvider extends AbstractServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot(): void
    {
        $this->publishMigrations();
    }

    /**
     * Register the application services.
     */
    public function register(): void
    {
        parent::register();

        $this->commands(SeedCarriers::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides(): array
    {
        return array_merge(parent::provides(), [
            SeedCarriers::class,
        ]);
    }

    /**
     * Get the default package name.
     *
     * @return string
     */
    public function getPackageName(): string
    {
        return 'carriers';
    }
}
