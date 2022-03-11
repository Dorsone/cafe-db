<?php

namespace Database\Seeders;

use App\Models\SoldPlan;
use Illuminate\Database\Seeder;

class SoldPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SoldPlan::factory(100)->create();
    }
}
