<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getAll()
    {
        return response()->json(Product::all());
    }

    public function createModel(Request $request)
    {
        $input = $request->validate([
            'category_id' => 'required|int',
            'product_name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|decimal',
        ]);

        $product=Product::create($input);
        $product->save();

        return response()->json($product);
        //return response()->json("New Object successfully created");
    }

    public function updateModel(Request $request , $id)
    {
        $data =  $request->json()->all();
        $category_id = $data['category_id'];
        $product_name = $data['product_name'];
        $description = $data['description'];
        $price = $data['price'];

        $updateProduct = Product::findOrFail($id);
        $updateProduct->category_id =$category_id;
        $updateProduct->product_name =$product_name;
        $updateProduct->description =$description;
        $updateProduct->price =$price;
        $updateProduct->save();
        return response()->json($updateProduct);
    }

    public function deleteById($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return response()->json("data has been deleted");
    }
}
