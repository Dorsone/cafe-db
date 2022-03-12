<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class StorageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $prod_id = Product::query()->inRandomOrder()->first()->product_id;
        return [
            'prod_id' => $prod_id,
            'cnt' => 0,
        ];
    }
}
