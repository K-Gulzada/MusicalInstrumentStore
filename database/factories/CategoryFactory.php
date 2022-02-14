<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    public function definition()
    {
        return [
            'productType' => $this->faker->text(25),
            'description' => $this->faker->text(50)
        ];
    }
}
