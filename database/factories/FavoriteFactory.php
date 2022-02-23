<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class FavoriteFactory extends Factory
{
    public function definition()
    {
        return [
            'product_id' => Product::factory(),
            'user_id' => $this->faker->buildingNumber()
        ];
    }
}
