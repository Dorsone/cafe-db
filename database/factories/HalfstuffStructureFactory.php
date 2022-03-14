<?php

namespace Database\Factories;

use App\Models\Halfstaff;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class HalfstuffStructureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $halfstuff_id = Halfstaff::query()->inRandomOrder()->first()->halfstuff_id;
        $prod_id = Product::query()->inRandomOrder()->first()->product_id;
        return [
            'halfstuff_id' => $halfstuff_id,
            'prod_id' => $prod_id,
            'amount' => $this->faker->randomFloat(2, 0, 5),
            'types' => $this->faker->numberBetween(1, 3),
        ];
    }
}
