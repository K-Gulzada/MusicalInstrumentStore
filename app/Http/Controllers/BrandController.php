<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends CommonController
{

    protected function getClass()
    {
        return app(Brand::class);
    }

    public function update(Request $request , $id)
    {
        $data =  $request->json()->all();
        $name = $data['name'];
        $img_path = $data['img_path'];  
        $description = $data['description'];      

        $brand = Brand::findOrFail($id);
        $brand->name =$name;
        $brand->img_path =$img_path;
        $brand->description =$description;
      
        $brand->save();
        return response()->json($brand, 203);
    }
}
