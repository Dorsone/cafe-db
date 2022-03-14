<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DishFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $department_id = $this->faker->numberBetween(1, 100);
        return [
            'name' => $this->faker->word(),
            'price' => $this->faker->randomFloat(2, 1, 10000),
            'percent' => $this->faker->randomFloat(2, 5, 90),
            'count' => $this->faker->randomFloat(2, 0, 5),
            'department_id' => $department_id,
            'status' => $this->faker->numberBetween(0, 1),
        ];
    }
}
