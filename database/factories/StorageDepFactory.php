<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class StorageDepFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $prod_id = Product::query()->inRandomOrder()->first()->prod_id;
        $department_id = Department::query()->inRandomOrder()->first()->department_id;
        return [
            'prod_id' => $prod_id,
            'cnt' => 0.1,
            'department_id' => $department_id,
            'prod_type' => $this->faker->numberBetween(1, 20),
        ];
    }
}
