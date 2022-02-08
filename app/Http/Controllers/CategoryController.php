<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    //
    public function show()
    {
      return response()->json("test message");
    }

    public function getAll()
    {
        return response()->json(Category::all());
    }
// CHECK METHOD

    public function getAll_2()
    {
        $categories = Category::orderBy('id', 'desc')
            ->paginate(10); // Трюк для получения пагинатора
        return response()->json(categories);
    }

    public function createModel(Request $request)
    {
        $input = $request->validate([
            'productType' => 'required|string',
            'description' => 'required|string',
        ]);

        $category=Category::create($input);
        $category->save();

        return response()->json($category);
        //return response()->json("New Object successfully created");
    }

    public function updateModel(Request $request , $id)
    {
        $data =  $request->json()->all();
        $productType = $data['productType'];
        $description = $data['description'];

        $updateCategory = Category::findOrFail($id);
        $updateCategory->productType =$productType;
        $updateCategory->description =$description;
        $updateCategory->save();
        return response()->json($updateCategory);
    }

    public function deleteById($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return response()->json("data has been deleted");
    }
}
