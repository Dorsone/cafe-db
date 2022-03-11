<?php

namespace Database\Factories;

use App\Models\Dish;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class DishStructureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $dish_id = Dish::query()->inRandomOrder()->first()->dish_id;
        $prod_id = Product::query()->inRandomOrder()->first()->prod_id;
        return [
            'dish_id' => $dish_id,
            'prod_id' => $prod_id,
            'amount' => false,
        ];
    }
}
