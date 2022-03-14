<?php

namespace Database\Factories;

use App\Models\Orderpoint;
use Illuminate\Database\Eloquent\Factories\Factory;

class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'color' => $this->faker->colorName(),
            'status' => $this->faker->numberBetween(0, 1),
            'printer' => $this->faker->word(),
        ];
    }
}
