<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class DiscontFactory extends Factory
{
    public function definition()
    {
        return [
            'percent' => $this->faker->numberBetween($min = 1, $max = 100),
            'product_id' => Product::factory(),
            'start_date' => $this->faker->date('Y-m-d'),
            'end_date' => $this->faker->date('Y-m-d'),
        ];
    }
}
