<?php

namespace App\Http\Controllers;

use App\Http\Services\Interfaces\CommonServiceInterface;
use App\Models\Booking;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


abstract class CommonController extends Controller
{
    abstract protected function getClass();
   // protected $service;

    /* public function get()
     {
         //   return response()->json($this->getClass()::paginate(1));
         return response()->json($this->getClass()::all());
     }*/

     public function getById($id)
     {
       $data = $this->getClass()::findOrFail($id);
        
         return response()->json($data, 200);
     }

    public function get(Request $request)
    {
        //   return response()->json($this->getClass()::paginate(1));
        // dd($request->input(['product_name']));
        // dd($request->input());

        if (!empty($request->input())) {
            $list = $this->getClass();
            foreach ($request->input() as $key => $value) {
                //  dd( "Key: ". $key . " |  VALUE: ". $value);
                $list = $list->where($key, 'ilike', '%'.$value.'%');
            }

            return response()->json($list->get());

        } else {
            //return response()->json($this->getClass()::paginate(1));
            return response()->json($this->getClass()::all());
        }

    }

    public function create(Request $request)
    {
        $newObject = $this->getClass()::create($this->getClass()->myValidator($request));
        $newObject->save();
        return response()->json($newObject, 201);
    }

    public function delete($id)
    {
//        $data = $this->getClass()::findOrFail($id);
        $data = $this->checkIfExists($id);
        $data->delete();
        return response()->json("data has been deleted", 204);
    }

    function checkIfExists($id) {
        $data = $this->getClass()::findOrFail($id);
        if ($data ==null) {
            throw new ModelNotFoundException();
        }
        return $data;
    }
}

