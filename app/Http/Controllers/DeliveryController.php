<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DeliveryController extends CommonController
{
   /* public function get()
    {
        $delivery = Delivery::paginate(1);
        return response()->json($delivery);
    }*/

  /*  public function create(Request $request)
    {
        // для Postman Price отправим вручную
        // на фронте юзер из селекта выбирает город или область
        // соответственно Price устанавливается либо 0, либо 1600тг

    //// когда фронт будет готов
     //    $input = $request->validate([
     //    'address' => 'required|string',
     //    'phone_number' => 'required|string'
   //  ]);

        $data = $request->validate([
            'address' => 'required|string',
            'phone_number' => 'required|string',
            'price' => 'required|int'
        ]);

        $data['status_id'] = 1; // "Not Delivered";
        $data['ordered_date'] = Carbon::now()->format('Y-m-d');


        $status = Delivery::create($data);
        $status->save();

        return response()->json($status);
    }*/

  /*  public function delete($id)
    {
        $status = Delivery::findOrFail($id);
        $status->delete();
        return response()->json("data has been deleted");
    }*/

    protected function getClass()
    {
        return app(Delivery::class);
    }
}
