<?php



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
    public function __construct()
    {
        parent::__construct();
    }

    public function fire(): void
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
    protected function getArguments(): array
    {
        return [];
    }

    /**
     * @return array
     */
    protected function getOptions(): array
    {
        return [];
    }
}
