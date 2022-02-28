<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StatusTest extends TestCase
{
    /*
    static public $id;

    public function test_get()
    {
        $response = $this->get('http://127.0.0.1:8000/api/status');

        $response->assertStatus(200);
    }

    public function test_get405()
    {
        $response = $this->json('GET', 'http://127.0.0.1:8000/api/status/999999');

        $response->assertStatus(405);
    }

    public function test_post()
    {

        $response = $this->json('POST', 'http://127.0.0.1:8000/api/status',
            [
                'status_text' => 'test status'
            ]);
        self::$id = $response['id'];

        $response->assertStatus(201);
    }

    public function test_post422()
    {
        $response = $this->json('POST', 'http://127.0.0.1:8000/api/status',
            [
                'status_text' => 11
            ]);

        $response->assertStatus(422);
    }

    public function test_post404()
    {
        $response = $this->json('POST', 'http://127.0.0.1:8000/api/create',
            [
                'status_text' => 'test status'
            ]);

        $response->assertStatus(404);
    }

    public function test_delete()
    {
        $response = $this->json('DELETE', 'http://127.0.0.1:8000/api/status/'.self::$id);

        $response->assertStatus(204);
    }
    */
}
