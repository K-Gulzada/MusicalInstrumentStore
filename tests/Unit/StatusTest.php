<?php

namespace Tests\Unit;

use App\Models\Status;
use Tests\TestCase;

class StatusTest extends TestCase
{
    public function test_example()
    {
        $data = Status::all()->random(1)->first();

        $this->assertTrue(array_key_exists('status_text', $data->toArray()));
         $this->assertFalse(array_key_exists('description', $data->toArray()));
        /*$this->assertFalse($basket->has('Just first Some text'));
        $this->assertFalse($basket->has('Just second Some text'));*/
    }
}
