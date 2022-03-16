<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Nette\Utils\DateTime;

class BookingController extends CommonController
{

    public function update(Request $request, $id)
    {
        $data = $request->json()->all();
        $product_id = $data['product_id'];
        $start_date = $data['start_date'];
        $end_date = $data['end_date'];

        $booking = Booking::findOrFail($id);
        $booking->product_id = $product_id;
        $booking->start_date = $start_date;
        $booking->end_date = $end_date;
        $booking->save();
        return response()->json($booking, 203);
    }

    protected function getClass()
    {
        return app(Booking::class);
    }
}
