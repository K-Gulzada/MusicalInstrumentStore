<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DiscountTest extends TestCase
{
    static public $id;

    public function test_get()
    {
        $response = $this->get('http://127.0.0.1:8000/api/discount');

        $response->assertStatus(200);
    }

    public function test_get405()
    {
        $response = $this->json('GET', 'http://127.0.0.1:8000/api/discount/999999');

        $response->assertStatus(405);
    }

    public function test_post()
    {
        $response = $this->json('POST', 'http://127.0.0.1:8000/api/discount',
            [
                'percent' => 15,
                "product_id" => Product::all()->random()->id,
                "start_date" => "2012-12-12",
                "end_date" => "2012-12-12"
            ]);
        self::$id = $response['id'];

        $response->assertStatus(201);
    }

    public function test_post422()
    {
        $response = $this->json('POST', 'http://127.0.0.1:8000/api/discount',
            [
                'percent' => 'blabla',
                "product_id" => Product::all()->random()->id,
                "start_date" => 12,
                "end_date" => 2012
            ]);

        $response->assertStatus(422);
    }

    public function test_post404()
    {
        $response = $this->json('POST', 'http://127.0.0.1:8000/api/create',
            [
                'percent' => 15,
                "product_id" => Product::all()->random()->id,
                "start_date" => "2012-12-12",
                "end_date" => "2012-12-12"
            ]);

        $response->assertStatus(404);
    }

    public function test_delete()
    {
        $response = $this->json('DELETE', 'http://127.0.0.1:8000/api/discount/' . self::$id);

        $response->assertStatus(204);
    }
}
