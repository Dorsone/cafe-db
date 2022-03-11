<?php

namespace Database\Seeders;

use App\Models\Halfstaff;
use Illuminate\Database\Seeder;

class HalfstaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Halfstaff::factory(100)->create();
    }
}
