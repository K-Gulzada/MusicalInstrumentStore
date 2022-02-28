<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Models\Status;
use Tests\TestCase;

class BookingTest extends TestCase
{
   /* static public $id;

    public function test_get()
    {
        $response = $this->get('http://127.0.0.1:8000/api/booking');

        $response->assertStatus(200);
    }

    public function test_get405()
    {
        $response = $this->json('GET', 'http://127.0.0.1:8000/api/booking/999999');

        $response->assertStatus(405);
    }

    public function test_post()
    {
        $data = [
            'product_id' => Product::all()->random()->id
        ];

        $response = $this->json('POST', 'http://127.0.0.1:8000/api/booking', $data);
        self::$id = $response['id'];
        $response->assertStatus(201);
    }

    public function test_post422()
    {
        $response = $this->json('POST', 'http://127.0.0.1:8000/api/booking',
            [
                'product_id' => 'Product::all()->random()->id'
            ]);

        $response->assertStatus(422);
    }

    public function test_post404()
    {
        $response = $this->json('POST', 'http://127.0.0.1:8000/api/create',
            [
                'product_id' => Product::all()->random()->id
            ]);

        $response->assertStatus(404);
    }

    public function test_put()
    {
        $response = $this->json('PUT', 'http://127.0.0.1:8000/api/booking/' . self::$id,
            [
                'product_id' => Product::all()->random()->id,
                "start_date" => "2012-12-12",
                "end_date" => "2012-12-12",
                "status_id" => Status::all()->random()->id,
                "user_id" => "test"
            ]);

        $response->assertStatus(203);
    }

    public function test_delete()
    {
        $response = $this->json('DELETE', 'http://127.0.0.1:8000/api/booking/' . self::$id);

        $response->assertStatus(204);
    }*/
}
