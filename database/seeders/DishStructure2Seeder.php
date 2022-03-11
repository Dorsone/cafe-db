<?php

namespace Database\Seeders;

use App\Models\DishStructure2;
use Illuminate\Database\Seeder;

class DishStructure2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DishStructure2::factory(100)->create();
    }
}
