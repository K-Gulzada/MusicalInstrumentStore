<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StatusTest extends TestCase
{
    static public $id;
/*
    public function test_get()
    {
        $response = $this->get('http://127.0.0.1:8000/api/getAllStatus');

        $response->assertStatus(200);
    }

    public function test_post()
    {

        $response = $this->json('POST', 'http://127.0.0.1:8000/api/createStatus',
            [
                'status_text' => 'test status'
            ]);
        self::$id = $response['id'];

        $response->assertStatus(201);
    }

    public function test_delete()
    {
        $response = $this->json('DELETE', 'http://127.0.0.1:8000/api/deleteStatusById/'.self::$id);

        $response->assertStatus(204);
    }*/
}
