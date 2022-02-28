<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BrandTest extends TestCase
{
    /*
    static public $id;

    public function test_get()
    {
        $response = $this->get('http://127.0.0.1:8000/api/brand');

        $response->assertStatus(200);
    }

    public function test_get405()
    {
        $response = $this->json('GET', 'http://127.0.0.1:8000/api/brand/999999');

        $response->assertStatus(405);
    }

    public function test_post()
    {
        $response = $this->json('POST', 'http://127.0.0.1:8000/api/brand',
            [
                'name' => 'test status',
                "img_path" => "test.jpg",
                "description" => "test description"
            ]);
        self::$id = $response['id'];

        $response->assertStatus(201);
    }

    public function test_post422()
    {
        $response = $this->json('POST', 'http://127.0.0.1:8000/api/brand',
            [
                'name' => 11,
                "img_path" => 11,
                "description" => 11
            ]);

        $response->assertStatus(422);
    }

    public function test_post404()
    {
        $response = $this->json('POST', 'http://127.0.0.1:8000/api/create',
            [
                'name' => 'test status',
                "img_path" => "test.jpg",
                "description" => "test description"
            ]);

        $response->assertStatus(404);
    }

    public function test_delete()
    {
        $response = $this->json('DELETE', 'http://127.0.0.1:8000/api/brand/' . self::$id);

        $response->assertStatus(204);
    }
    */
}
