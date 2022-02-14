<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ["productType", "description"];

    public function myValidator(Request $request)
    {
        $data = $request->validate([
            'productType' => 'required|string',
            'description' => 'required|string',
        ]);

        return $data;
    }
}
