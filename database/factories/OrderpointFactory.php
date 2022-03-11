<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderpointFactory extends Factory
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
            'login' => $this->faker->userName(),
            'password' => 'password',
            'status' => $this->faker->numberBetween(1, 10),
        ];
    }
}
