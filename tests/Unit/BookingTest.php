<?php

namespace Tests\Unit;

use App\Models\Booking;
use Tests\TestCase;

class BookingTest extends TestCase
{
    public function test_example()
    {
        $data = Booking::all()->random(1)->first();

        $this->assertTrue(array_key_exists('start_date', $data->toArray()));
        /* $this->assertTrue($basket->has('description'));
         $this->assertFalse($basket->has('Just first Some text'));
         $this->assertFalse($basket->has('Just second Some text'));*/
    }
}
