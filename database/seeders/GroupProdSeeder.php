<?php

namespace Database\Seeders;

use App\Models\GroupProd;
use Illuminate\Database\Seeder;

class GroupProdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GroupProd::factory(100)->create();
    }
}
