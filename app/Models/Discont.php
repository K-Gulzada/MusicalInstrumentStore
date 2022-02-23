<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discont extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ["percent", "product_id", "start_date", "end_date"];

    public function myValidator(Request $request)
    {
        $data = $request->validate([
            'percent' => 'required|int',
            'product_id' => 'required|int',
            'start_date' => 'required|string',
            'end_date' => 'required|string'
        ]);

        return $data;
    }
}



