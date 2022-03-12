<?php

namespace Database\Factories;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

class HalfstaffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $department_id = Department::query()->inRandomOrder()->first()->department_id;
        return [
            'name' => $this->faker->word(),
            'stuff_type' => $this->faker->numberBetween(1, 100),
            'price' => $this->faker->numberBetween(1, 100),
            'count' => 0,
            'department_id' => $department_id,
            'status' => $this->faker->numberBetween(1, 10),
            'distrib' => $this->faker->numberBetween(1, 10),
        ];
    }
}
