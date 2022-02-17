<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;


abstract class CommonController extends Controller
{
    abstract protected function getClass();

    public function get()
    {
     //   return response()->json($this->getClass()::paginate(1));
        return response()->json($this->getClass()::all());
    }

    public function create(Request $request)
    {
        $newObject = $this->getClass()::create($this->getClass()->myValidator($request));
        $newObject->save();
        return response()->json($newObject, 201);
    }

    public function delete($id)
    {
        $data = $this->getClass()::findOrFail($id);
        $data->delete();
        return response()->json("data has been deleted", 204);
    }
}
