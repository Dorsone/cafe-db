<?php

namespace Database\Seeders;

use App\Models\Dish;
use App\Models\DishStructure;
use Illuminate\Database\Seeder;

class DishStructureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DishStructure::factory(100)->create();
    }
}
