<?php

namespace Tests\Feature;

use App\Models\Product;
use Tests\TestCase;

class BookingTest extends TestCase
{
    static public $id;
/*     public function test_get()
     {
         $response = $this->get('http://127.0.0.1:8000/api/getAllBooking');

         $response->assertStatus(200);
     }

    public function test_post()
    {
        $data = [
            'product_id' => Product::all()->random()->id
        ];

        $response = $this->json('POST', 'http://127.0.0.1:8000/api/createBooking', $data);
        self::$id = $response['id'];
        $response->assertStatus(201);
    }

    public function test_put()
    {
        $response = $this->json('PUT', 'http://127.0.0.1:8000/api/updateBooking/'.self::$id,
            [
                'product_id' => 2,
                'status_id' => 18,
                'start_date'=>'2012-12-12',
                'end_date'=>'2012-12-12',
                'user_id' => 'TMP USERID'
            ]);

        $response->assertStatus(203);
    }

    public function test_delete()
    {
        $response = $this->json('DELETE', 'http://127.0.0.1:8000/api/deleteBookingById/'.self::$id);

        $response->assertStatus(204);
    }*/
}
