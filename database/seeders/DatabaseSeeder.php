<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\Category;
use App\Models\Product;
use App\Models\Status;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Status::factory()->count(3)->create();
        Category::factory()->count(3)->create();
        Product::factory()->count(10)->create();
        Booking::factory()->count(10)->create();
    }
}
