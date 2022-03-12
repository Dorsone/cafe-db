<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $just = Product::query()->inRandomOrder()->first();
        return [
            'mType' => 1,
            'just_id' => $just->prod_id,
            'type' => $this->faker->numberBetween(1, 3),
            'type_id' => $this->faker->numberBetween(1, 3),
        ];
    }
}
