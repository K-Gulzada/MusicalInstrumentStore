<?php

namespace App\Http\Services\Impl;

use App\Http\Services\Interfaces\CommonServiceInterface;
use Illuminate\Http\Request;

class CommonServiceImpl implements CommonServiceInterface
{

    public function get(Request $request)
    {
        if (!empty($request->input())) {
            $list = $this->getClass();
            foreach ($request->input() as $key => $value) {
                //  dd( "Key: ". $key . " |  VALUE: ". $value);
                $list = $list->where($key, 'like', '%'.$value.'%');
            }

            return response()->json($list->get());

        } else {
            //return response()->json($this->getClass()::paginate(1));
            return response()->json($this->getClass()::all());
        }
    }
}
