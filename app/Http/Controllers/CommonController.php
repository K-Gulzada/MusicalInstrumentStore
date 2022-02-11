<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class CommonController extends Controller
{
    abstract protected function getClass();

    public function get()
    {
        return response()->json($this->getClass()::all());
    }
}
