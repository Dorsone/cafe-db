<?php

namespace Database\Seeders;

use App\Constants\MeasurementConstant;
use App\Models\Measurement;
use Illuminate\Database\Seeder;

class MeasurementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Measurement::query()->insert([
            ['name' => MeasurementConstant::METRE],
            ['name' => MeasurementConstant::LITRE],
            ['name' => MeasurementConstant::PIECE],
            ['name' => MeasurementConstant::KILOGRAM],
        ]);
    }
}
