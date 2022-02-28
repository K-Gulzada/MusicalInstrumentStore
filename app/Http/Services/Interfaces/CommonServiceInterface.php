<?php

namespace App\Http\Services\Interfaces;

use Illuminate\Http\Request;

interface CommonServiceInterface
{
    public function get(Request $request);
}
