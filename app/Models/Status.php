<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Status extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ["status_text"];

    public function myValidator(Request $request)
    {
        $data = $request->validate([
            'status_text' => 'required|string',
        ]);

        return $data;
    }


}
