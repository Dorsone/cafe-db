<?php

namespace Database\Seeders;

use App\Models\Orderpoint;
use Illuminate\Database\Seeder;

class OrderpointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Orderpoint::factory(100)->create();
    }
}
