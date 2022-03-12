<?php

namespace Database\Factories;

use App\Models\Dish;
use App\Models\Halfstaff;
use Illuminate\Database\Eloquent\Factories\Factory;

class DishStructure2Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $dish_id = Dish::query()->inRandomOrder()->first()->dish_id;
        $halfstuff_id = Halfstaff::query()->inRandomOrder()->first()->halfstuff_id;
        return [
            'dish_id' => $dish_id,
            'halfstuff_id' => $halfstuff_id,
            'amount' => 0,
        ];
    }
}
