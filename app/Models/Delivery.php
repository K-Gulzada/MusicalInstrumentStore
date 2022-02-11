<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ["address", "phone_number", "price", "status_id", "ordered_date", "delivered_date"];
}
