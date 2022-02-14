<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Delivery extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ["address", "phone_number", "price", "status_id", "ordered_date", "delivered_date"];

    public function myValidator(Request $request)
    {
        $data = $request->validate([
            'address' => 'required|string',
            'phone_number' => 'required|string',
            'price' => 'required|int'
        ]);

        $data['status_id'] = 1; // "Not Delivered";
        $data['ordered_date'] = Carbon::now()->format('Y-m-d');
        return $data;
    }

}
