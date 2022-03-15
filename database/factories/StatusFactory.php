<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StatusFactory extends Factory
{
    public function definition()
    {
        return [
            'status_text' => $this->faker->text(20)
        ];
    }
}
