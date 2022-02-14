<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition()
    {
        return [
            'category_id' => Category::factory(),
            'product_name' => $this->faker->text(15),
            'description' => $this->faker->text(50),
            'price' => $this->faker->buildingNumber(),
            'img_path' => $this->faker->imageUrl()
        ];
    }
}
