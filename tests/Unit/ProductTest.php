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
        /* $this->assertTrue($basket->has('description'));
         $this->assertFalse($basket->has('Just first Some text'));
         $this->assertFalse($basket->has('Just second Some text'));*/
    }
}
