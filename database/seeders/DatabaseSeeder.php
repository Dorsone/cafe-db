<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            DishTypeSeeder::class,
            DepartmentSeeder::class,
            TableSeeder::class,
            MeasurementSeeder::class,
            ProductSeeder::class,
            StorageSeeder::class,
            MenuSeeder::class,
            StorageDepSeeder::class,
            DishSeeder::class,
            HalfstaffSeeder::class,
            DishStructureSeeder::class,
            DishStructure2Seeder::class,
            ProductSeeder::class,
        ]);
    }
}
