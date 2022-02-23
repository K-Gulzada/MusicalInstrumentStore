<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Brand extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ["name", "img_path", "description"];

    public function myValidator(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'img_path' => 'string',
            'description' => 'string'
        ]);

        return $data;
    }
}

