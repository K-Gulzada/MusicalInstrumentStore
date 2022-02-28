<?php

namespace Tests\Unit;

use App\Models\Brand;
use Tests\TestCase;

class BrandTest extends TestCase
{
    public function test_fieldExists()
    {
        $data = Brand::all()->random(1)->first();
       // dd($data);
        $this->assertTrue(array_key_exists('img_path', $data->toArray()));
    }

    public function test_fieldNotExists()
    {
        $data = Brand::all()->random(1)->first();
        $this->assertFalse(array_key_exists('img', $data->toArray()));
    }

    public function test_fieldsEqual()
    {
        $data = "test Brand Name";
        $brand = new Brand(
            [
                "name"=>"test Brand Name",
                "img_path"=>"test.jpg",
                "description"=>"test"
            ]);
        $this->assertEquals($data, $brand['name']);
    }

    public function test_fieldNull()
    {
        $brand = new Brand();
        $this->assertNull($brand['id']);
    }
}
