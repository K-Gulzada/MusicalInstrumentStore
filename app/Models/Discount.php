<?php

namespace App\Models;

use Carbon\Carbon;
use Carbon\Exceptions\InvalidFormatException;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class Discount extends Model
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

    function checkDateFormat($data)
    {
        $date = $data['start_date'];
        $currentDate = Carbon::now()->format('Y-m-d');
        if ($date > $currentDate) {
            throw new InvalidFormatException("Invalid Date Format");
        }
        return $data;
    }
}



