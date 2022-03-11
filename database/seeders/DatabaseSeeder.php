<?php

namespace Database\Seeders;

use App\Models\DishStructure2;
use App\Models\Halfstaff;
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
            OrderpointSeeder::class,
            DepartmentSeeder::class,
            TableSeeder::class,
            TypeSeeder::class,
            MeasurementSeeder::class,
            GroupProdSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            DishSeeder::class,
            HalfstaffSeeder::class,
            DishStructureSeeder::class,
            DishStructure2Seeder::class,
        ]);
    }
}
