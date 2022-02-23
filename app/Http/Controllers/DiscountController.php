<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use Illuminate\Http\Request;

class DiscountController extends CommonController
{

    protected function getClass()
    {
        return app(Discount::class);
    }
}
