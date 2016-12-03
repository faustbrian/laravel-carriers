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

namespace BrianFaust\Carriers\Console;

use BrianFaust\Carriers\Models\Carrier;
use DB;
use Illuminate\Console\Command;

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
    public function __construct(): void
    {
        parent::__construct();
    }

    public function fire()
    {
        DB::table('carriers')->delete();

        $data = base_path('vendor/faustbrian/mobile-codes/dist/unsorted/data.json');
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
