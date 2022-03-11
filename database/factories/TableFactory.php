<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'table_num' => $this->faker->numberBetween(1, 50),
            'status' => $this->faker->numberBetween(1, 10),
        ];
    }
}
