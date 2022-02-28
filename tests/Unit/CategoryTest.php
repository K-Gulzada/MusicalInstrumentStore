<?php

namespace Tests\Unit;

use App\Models\Category;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    public function test_fieldExists()
    {
        $data = Category::all()->random(1)->first();
        $this->assertTrue(array_key_exists('productType', $data->toArray()));
    }

    public function test_fieldNotExists()
    {
        $data = Category::all()->random(1)->first();
        $this->assertFalse(array_key_exists('typeOfProduct', $data->toArray()));
    }

    public function test_fieldsEqual()
    {
        $data = "test ProductType";
        $booking = new Category(["productType"=>"test ProductType", "description"=>"test Description"]);
        $this->assertEquals($data, $booking['productType']);
    }

    public function test_fieldNull()
    {
        $category = new Category();
        $this->assertNull($category['id']);
    }
}
