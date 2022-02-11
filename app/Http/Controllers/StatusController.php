<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Status;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StatusController extends CommonController
{
    public function get()
    {
        $status = Status::paginate(1);
        return response()->json($status);
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'status_text' => 'required|string',
        ]);

        $status = Status::create($data);
        $status->save();

        return response()->json($status);
    }

    public function delete($id)
    {
        $status = Status::findOrFail($id);
        $status->delete();
        return response()->json("data has been deleted");
    }

    protected function getClass()
    {
       return Status::class;
    }
}
