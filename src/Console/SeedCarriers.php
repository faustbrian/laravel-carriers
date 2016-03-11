<?php

/*
 * This file is part of Laravel Carriers.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Carriers\Console;

use DB;
use DraperStudio\Carriers\Models\Carrier;
use Illuminate\Console\Command;

/**
 * Class SeedCarriers.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class SeedCarriers extends Command
{
    /**
     * @var string
     */
    protected $name = 'carriers:seed';

    /**
     * @var string
     */
    protected $description = 'Command description.';

    /**
     * SeedCarriers constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function fire()
    {
        DB::table('carriers')->delete();

        $data = base_path('vendor/draperstudiomobile-codes/dist/unsorted/data.json');
        $data = file_get_contents($data);
        $carriers = json_decode($data, true);

        foreach ($carriers as $country) {
            Carrier::create($country);
        }

        $this->info('Carriers seeded!');
    }

    /**
     * @return array
     */
    protected function getArguments()
    {
        return [];
    }

    /**
     * @return array
     */
    protected function getOptions()
    {
        return [];
    }
}
