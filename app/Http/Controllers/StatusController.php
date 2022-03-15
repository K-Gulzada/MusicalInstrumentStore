<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Status;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StatusController extends CommonController
{
    protected function getClass()
    {
        return app(Status::class);
    }

    public function update(Request $request , $id)
    {
        $data =  $request->json()->all();
        $status_text = $data['status_text'];
            

        $status = Status::findOrFail($id);
        $status->status_text =$status_text;
      
        $status->save();
        return response()->json($status, 203);
    }
}
