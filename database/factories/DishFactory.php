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
            'price' => null,
            'percent' => false,
            'count' => true,
            'department_id' => $department_id,
            'status' => $this->faker->numberBetween(1, 10),
            'distrib' => $this->faker->numberBetween(1, 10),
        ];
    }
}
