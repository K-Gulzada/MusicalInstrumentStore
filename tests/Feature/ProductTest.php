<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    static public $id;


    /*    public function test_get()
        {
            $response = $this->get('http://127.0.0.1:8000/api/getAllProduct');

            $response->assertStatus(200);
        }

        public function test_getOne()
    {
        $name = Product::all()->random()->product_name;

        $response = $this->json('GET', 'http://127.0.0.1:8000/api/getByProductName/фагот');


        $response->assertStatus(200)
            ->assertJsonFragment([
                'product_name' => 'фагот',
            ]);
    }

        public function test_post()
        {
            $response = $this->json('POST', 'http://127.0.0.1:8000/api/createProduct',
                [
                    'category_id' => 1,
                    'product_name' => 'TEST2',
                    'description' => 'TEST DESCRIPTION2',
                    'price' => 111111
                ]);
            self::$id = $response['id'];
            $response->assertStatus(201);
        }

        public function test_put()
        {
            $response = $this->json('PUT', 'http://127.0.0.1:8000/api/updateProduct/'.self::$id,
                [
                    'category_id' => 1,
                    'product_name' => 'TEST2',
                    'description' => 'TEST DESCRIPTION2',
                    'img_path'=>'test_path',
                    'price' => 990990
                ]);

            $response->assertStatus(203);
        }

         public function test_delete()
          {
              $response = $this->json('DELETE', 'http://127.0.0.1:8000/api/deleteProductById/'.self::$id);

              $response->assertStatus(204);
          }*/


}
