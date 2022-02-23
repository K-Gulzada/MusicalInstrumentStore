<?php

namespace Tests\Feature;

use App\Models\Status;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DeliveryTest extends TestCase
{
    static public $id;

    public function test_get()
    {
        $response = $this->get('http://127.0.0.1:8000/api/delivery');

        $response->assertStatus(200);
    }

    public function test_get405()
    {
        $response = $this->json('GET', 'http://127.0.0.1:8000/api/delivery/999999');

        $response->assertStatus(405);
    }

    public function test_post()
    {
        $response = $this->json('POST', 'http://127.0.0.1:8000/api/delivery',
            [
                "address" => "test address",
                "phone_number" => "87776665544",
                "price" => 55,
                "status_id" => Status::all()->random()->id,
                "ordered_date" => "2012-12-12",
                "delivered_date" => "2012-12-12"
            ]);

        dd($response);
        self::$id = $response['id'];

        $response->assertStatus(201);
    }

    public function test_post422()
    {
        $response = $this->json('POST', 'http://127.0.0.1:8000/api/delivery',
            [
                "address" => 11,
                "phone_number" => 11,
                "price" => 'blabla',
                "status_id" => Status::all()->random()->id,
                "ordered_date" => "2012-12-12",
                "delivered_date" => "2012-12-12"
            ]);

        $response->assertStatus(422);
    }

    public function test_post404()
    {
        $response = $this->json('POST', 'http://127.0.0.1:8000/api/create',
            [
                "address" => "test address",
                "phone_number" => "87776665544",
                "price" => 55,
                "status_id" => Status::all()->random()->id,
                "ordered_date" => "2012-12-12",
                "delivered_date" => "2012-12-12"
            ]);

        $response->assertStatus(404);
    }

    public function test_delete()
    {
        $response = $this->json('DELETE', 'http://127.0.0.1:8000/api/delivery/' . self::$id);

        $response->assertStatus(204);
    }
}
