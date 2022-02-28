<?php

namespace Tests\Unit;

use App\Models\Booking;
use App\Models\Product;
use Tests\TestCase;

class BookingTest extends TestCase
{
    public function test_fieldExists()
    {
        $data = Booking::all()->random(1)->first();

        $this->assertTrue(array_key_exists('start_date', $data->toArray()));
    }

    public function test_fieldNotExists()
    {
        $data = Booking::all()->random(1)->first();

        $this->assertFalse(array_key_exists('start', $data->toArray()));
    }

    public function test_fieldsEqual()
    {
        $id = Product::all()->random()->id;
        $booking = new Booking(['product_id' => $id]);
        $this->assertEquals($id, $booking['product_id']);
    }

    public function test_fieldNull()
    {
        $booking = new Booking();
        $this->assertNull($booking['id']);
    }

}
