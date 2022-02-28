<?php

namespace Tests\Unit;

use App\Models\Category;
use App\Models\Product;
use Tests\TestCase;

class ProductTest extends TestCase
{
    public function test_fieldExists()
    {
        $data = Product::all()->random(1)->first();
        $this->assertTrue(array_key_exists('product_name', $data->toArray()));
    }

    public function test_fieldNotExists()
    {
        $data = Product::all()->random(1)->first();
        $this->assertFalse(array_key_exists('name', $data->toArray()));
    }

    public function test_fieldsEqual()
    {
        $data = "test Product Name";
        $product = new Product(
            [
                "category_id"=>Category::all()->random()->id,
                "product_name"=>"test Product Name",
                "description"=> "Test Description",
                "price"=>55,
                "img_path"=>"test.jpg"
            ]);
        $this->assertEquals($data, $product['product_name']);
    }

    public function test_fieldNull()
    {
        $product = new Product();
        $this->assertNull($product['id']);
    }
}

