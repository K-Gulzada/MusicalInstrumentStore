<?php

namespace Tests\Unit;

use App\Models\Category;
//use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use function MongoDB\BSON\toJSON;

class CategoryTest extends TestCase
{
    public function test_example()
    {
        $data = Category::all()->random(1)->first();
//        dd($data);
     //  dd(array_key_exists('productType', $data->toArray()), $data->toArray());

        $this->assertTrue(array_key_exists('productType', $data->toArray()));
       /* $this->assertTrue($basket->has('description'));
        $this->assertFalse($basket->has('Just first Some text'));
        $this->assertFalse($basket->has('Just second Some text'));*/
    }
}

// https://www.cloudways.com/blog/laravel-unit-testing/
