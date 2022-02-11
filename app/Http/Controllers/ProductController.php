<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\product;
use Illuminate\Http\Request;
use Validator;

class ProductController extends Controller
{
    public function get()
    {
        $products = Product::paginate(1);
        return response()->json($products);
        //return response()->json(Product::all());
    }

    public function getByCategory($productType)
    {
        $input = Category::where('productType', $productType)->get();
        return response()->json(Product::get()->where('category_id', $input[0]->id));
    }

    public function getOne($productName)
    {
        return response()->json(Product::where('product_name', $productName))->get();
    }

    public function create(Request $request)
    {
        $input = $request->validate([
            'category_id' => 'required|int',
            'product_name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric|between:0,999999.99',
            'img_path' => 'string'
        ]);
        
        $product=Product::create($input);
        $product->save();

        return response()->json($product);
        //return response()->json("New Object successfully created");
    }

    public function update(Request $request , $id)
    {
        $data =  $request->json()->all();
        $category_id = $data['category_id'];
        $product_name = $data['product_name'];
        $description = $data['description'];
        $price = $data['price'];
        $img_path = $data['img_path'];

        $product = Product::findOrFail($id);
        $product->category_id =$category_id;
        $product->product_name =$product_name;
        $product->description =$description;
        $product->price =$price;
        $product->img_path =$img_path;
        $product->save();
        return response()->json($product);
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return response()->json("data has been deleted");
    }

    public function filter($fromPrice, $toPrice)
    {
        if($fromPrice==0&&$toPrice==0) {
            return response()->json(Product::all()->sortBy('price'));
        }else{
            return response()->json(Product::all()->whereBetween('price', [$fromPrice, $toPrice]));
        }
    }

   /* public function filterByPrice($fromPrice, $toPrice)
    {
        // Product::all()->sortBy("name"); | Product::all()->sortByDesc("name");
        return response()->json(Product::all()->whereBetween('price', [$fromPrice, $toPrice]));
    }*/
}
