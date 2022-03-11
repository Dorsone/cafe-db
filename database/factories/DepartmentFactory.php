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
        $point_id = Orderpoint::query()->inRandomOrder()->first()->point_id;
        return [
            'name' => $this->faker->word(),
            'color' => $this->faker->colorName(),
            'point_id' => $point_id,
            'status' => $this->faker->numberBetween(1, 10),
            'printer' => $this->faker->word(),
        ];
    }
}
