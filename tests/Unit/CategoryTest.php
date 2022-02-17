<?php

namespace Tests\Unit;

use App\Models\Category;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    public function test_example()
    {
        $data = Category::all()->random(1)->first();

        $this->assertTrue(array_key_exists('productType', $data->toArray()));
       /* $this->assertTrue($basket->has('description'));
        $this->assertFalse($basket->has('Just first Some text'));
        $this->assertFalse($basket->has('Just second Some text'));*/
    }
}

// https://www.cloudways.com/blog/laravel-unit-testing/
