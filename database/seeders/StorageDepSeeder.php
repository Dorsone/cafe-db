<?php

namespace Database\Seeders;

use App\Models\StorageDep;
use Illuminate\Database\Seeder;

class StorageDepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StorageDep::factory(100)->create();
    }
}
