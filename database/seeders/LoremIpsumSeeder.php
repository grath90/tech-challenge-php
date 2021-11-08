<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LoremIpsum;

class LoremIpsumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      LoremIpsum::factory()
                  ->count(10)
                  ->create();
    }
}
