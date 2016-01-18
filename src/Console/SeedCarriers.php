<?php

namespace DraperStudio\Carriers\Console;

use DB;
use DraperStudio\Carriers\Models\Carrier;
use Illuminate\Console\Command;

class SeedCarriers extends Command
{
    protected $name = 'carriers:seed';

    protected $description = 'Command description.';

    public function __construct()
    {
        parent::__construct();
    }

    public function fire()
    {
        DB::table('carriers')->delete();

        $data = base_path('vendor/draperstudioneat-mcc-mnc/dist/unsorted/data.json');
        $data = file_get_contents($data);
        $carriers = json_decode($data, true);

        foreach ($carriers as $country) {
            Carrier::create($country);
        }

        $this->info('Carriers seeded!');
    }

    protected function getArguments()
    {
        return [];
    }

    protected function getOptions()
    {
        return [];
    }
}
