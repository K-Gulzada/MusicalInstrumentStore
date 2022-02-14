<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;


class CategoryController extends CommonController
{
 /*   public function get()
    {
        return response()->json(Category::all());
    }*/

   /* public function get()
    {
        $categories = Category::orderBy('id', 'desc')->paginate(10);
        return response()->json($categories);
    }*/

    /*public function create(Request $request)
    {
        $data = $request->validate([
            'productType' => 'required|string',
            'description' => 'required|string',
        ]);

        $category=Category::create($data);
        $category->save();

        return response()->json($category);
    }*/

    public function update(Request $request , $id)
    {
        $data =  $request->json()->all();
        $productType = $data['productType'];
        $description = $data['description'];

        $category = Category::findOrFail($id);
        $category->productType =$productType;
        $category->description =$description;
        $category->save();
        return response()->json($category);
    }

   /* public function delete($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return response()->json("data has been deleted");
    }*/

    protected function getClass()
    {
        return app(Category::class);
    }
}
