<?php

namespace Tests\Unit;

use App\Models\Product;
use Tests\TestCase;

class ProductTest extends TestCase
{
    public function test_example()
    {
        $data = Product::all()->random(1)->first();

        $this->assertTrue(array_key_exists('product_name', $data->toArray()));
        $this->assertFalse(array_key_exists('name', $data->toArray()));
    }
}

// discount (id, процент, product_id, start_date, end_date)
// brand (id, name, description)
// favorites (id, user_id, product_id)
