<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ["category_id", "brand_id", "product_name", "description", "price", "img_path"];

    public function myValidator(Request $request)
    {
        $data = $request->validate([
            'category_id' => 'required|int',
            'brand_id' => 'required|int',
            'product_name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric|between:0,999999.99',
            'img_path' => 'string'
        ]);
        return $data;
    }
}


