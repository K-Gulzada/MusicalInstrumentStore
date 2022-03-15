<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use Illuminate\Http\Request;

class DiscountController extends CommonController
{

    protected function getClass()
    {
        return app(Discount::class);
    }

    public function update(Request $request , $id)
    {
        $data =  $request->json()->all();
        $percent = $data['percent'];     
        $product_id = $data['product_id'];
        $start_date = $data['start_date'];
        $end_date = $data['end_date'];
   

        $discount = Discount::findOrFail($id);
        $discount->percent =$percent;
        $discount->product_id =$product_id;
        $discount->start_date =$start_date;
        $discount->end_date =$end_date;

      
        $discount->save();
        return response()->json($discount, 203);
    }
}
