<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Favorite extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ["product_id", "user_id"];

    public function myValidator(Request $request)
    {
        $data = $request->validate([
            'product_id' => 'required|int',
            'user_id' => 'required|string',
        ]);

        return $data;
    }
}


