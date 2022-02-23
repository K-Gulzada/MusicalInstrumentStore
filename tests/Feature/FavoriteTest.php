<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FavoriteTest extends TestCase
{
    static public $id;

    public function test_get()
    {
        $response = $this->get('http://127.0.0.1:8000/api/favorite');

        $response->assertStatus(200);
    }

    public function test_get405()
    {
        $response = $this->json('GET', 'http://127.0.0.1:8000/api/favorite/999999');

        $response->assertStatus(405);
    }

    public function test_post()
    {
        $response = $this->json('POST', 'http://127.0.0.1:8000/api/favorite',
            [
                "product_id" => Product::all()->random()->id,
                "user_id" => "test user_id"
            ]);
        self::$id = $response['id'];

        $response->assertStatus(201);
    }

    public function test_post422()
    {
        $response = $this->json('POST', 'http://127.0.0.1:8000/api/favorite',
            [
                "product_id" => "Product::all()->random()->id",
                "user_id" => 11
            ]);

        $response->assertStatus(422);
    }

    public function test_post404()
    {
        $response = $this->json('POST', 'http://127.0.0.1:8000/api/create',
            [
                "product_id" => Product::all()->random()->id,
                "user_id" => "test user_id"
            ]);

        $response->assertStatus(404);
    }

    public function test_delete()
    {
        $response = $this->json('DELETE', 'http://127.0.0.1:8000/api/favorite/' . self::$id);

        $response->assertStatus(204);
    }
}
