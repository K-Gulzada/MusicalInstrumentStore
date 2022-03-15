<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;

class FavoriteController extends CommonController
{

    protected function getClass()
    {
        return app(Favorite::class);
    }

    public function update(Request $request , $id)
    {
        $data =  $request->json()->all();
        $product_id = $data['product_id'];
        $user_id = $data['user_id'];      

        $favorite = Favorite::findOrFail($id);
        $favorite->product_id =$product_id;
        $favorite->user_id =$user_id;
      
        $favorite->save();
        return response()->json($favorite, 203);
    }

    public function getId(Request $request)
    {
        $user_id =  $request->input(['user_id']);
        $product_id = $request->input(['product_id']);
        
        $favorite = Favorite::where('product_id', $product_id)->where('user_id', $user_id)->first();
     
        return response()->json($favorite->id);
    }
}
