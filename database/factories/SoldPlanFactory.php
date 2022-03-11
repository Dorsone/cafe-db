<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SoldPlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $just_id = $this->faker->numberBetween(1, 100);
        return [
            'plan_date' => $this->faker->date('Y-m-d', 'now'),
            'just_id' => $just_id,
            'count' => false,
            'type' => $this->faker->numberBetween(1, 100),
        ];
    }
}
