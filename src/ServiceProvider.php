<?php

namespace DraperStudio\Carriers;

use DraperStudio\ServiceProvider\ServiceProvider as BaseProvider;
use DraperStudio\Carriers\Console\SeedCarriers;

class ServiceProvider extends BaseProvider
{
    protected $packageName = 'carriers';

    public function boot()
    {
        $this->setup(__DIR__)
             ->publishMigrations();
    }

    public function register()
    {
        $this->commands(SeedCarriers::class);
    }
}
