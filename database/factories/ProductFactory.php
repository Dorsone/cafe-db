<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Department;
use App\Models\GroupProd;
use App\Models\Measurement;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $measure_id = Measurement::query()->inRandomOrder()->first()->measure_id;
        $department_id = Department::query()->inRandomOrder()->first()->department_id;
        return [
            'name' => $this->faker->word(),
            'measure_id' => $measure_id,
            'price' => $this->faker->numberBetween(1000, 100000),
            'department_id' => $department_id,
            'status' => $this->faker->numberBetween(1, 10),
            'distrib' => $this->faker->numberBetween(1, 10),
        ];
    }
}
