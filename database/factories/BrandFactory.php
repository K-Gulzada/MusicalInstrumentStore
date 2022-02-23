<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BrandFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->text(20),
            'img_path' => $this->faker->imageUrl(),
            'description' => $this->faker->text(150)
        ];
    }
}
