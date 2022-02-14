<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    public function definition()
    {
        return [
            'product_id' => Product::factory(),
            'start_date' => $this->faker->date('Y-m-d'),
            'end_date' => $this->faker->date('Y-m-d'),
            'status_id' => Status::factory(),
            'user_id' => $this->faker->buildingNumber()
        ];
    }
}
