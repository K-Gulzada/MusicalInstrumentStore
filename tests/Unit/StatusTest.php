<?php

namespace Tests\Unit;

use App\Models\Status;
use Tests\TestCase;

class StatusTest extends TestCase
{
    public function test_fieldExists()
    {
        $data = Status::all()->random(1)->first();
        $this->assertTrue(array_key_exists('status_text', $data->toArray()));
    }

    public function test_fieldNotExists()
    {
        $data = Status::all()->random(1)->first();
        $this->assertFalse(array_key_exists('description', $data->toArray()));
    }

    public function test_fieldsEqual()
    {
        $data = "test Status Text";
        $status = new Status(
            [
                "status_text"=>"test Status Text"
            ]);
        $this->assertEquals($data, $status['status_text']);
    }

    public function test_fieldNull()
    {
        $status = new Status();
        $this->assertNull($status['id']);
    }
}
