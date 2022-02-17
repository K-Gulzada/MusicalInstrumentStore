<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class CategoryTest extends TestCase
{
    /*
   use withFaker;

   static public $id;

   public function test_get()
   {
       $response = $this->get('http://127.0.0.1:8000/api/getAllCategory');
       $response->assertStatus(200);
   }

       public function test_post()
       {
           $response = $this->json('POST', 'http://127.0.0.1:8000/api/createCategory',
               [
                   'productType' => $this->faker->text(25),
                   'description' => $this->faker->text(25)
               ]);
           self::$id = $response['id'];

           $response->assertStatus(201);
       }*/

/*    public function test_post422()
    {
        $response = $this->json('POST', 'http://127.0.0.1:8000/api/createCategory',
            [
                'productType' => 11,
                'description' => 11
            ]);

        $response->assertStatus(422);
    }

    public function test_post404()
    {
        $response = $this->json('POST', 'http://127.0.0.1:8000/api/create',
            [
                'productType' => 11,
                'description' => 11
            ]);

        $response->assertStatus(404);
    }*/

/*    public function test_put()
    {
        $response = $this->json('PUT', 'http://127.0.0.1:8000/api/updateCategory/' . self::$id,
            [
                'productType' => 'updated test productType',
                'description' => 'updated test description 2'
            ]);

        $response->assertStatus(203);
    }

    public function test_delete()
    {
        $response = $this->json('DELETE', 'http://127.0.0.1:8000/api/deleteCategoryById/' . self::$id);

        $response->assertStatus(204);
    }*/
}
