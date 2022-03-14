<?php

namespace Database\Seeders;

use App\Models\HalfstuffStructure;
use Illuminate\Database\Seeder;

class HalfstuffStructureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HalfstuffStructure::factory(100)->create();
    }
}
