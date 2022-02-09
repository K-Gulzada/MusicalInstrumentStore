<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Nette\Utils\DateTime;

class BookingController extends Controller
{
    public function getAll()
    {
        return response()->json(Booking::all());
    }

    public function createModel(Request $request)
    {
        $input = $request->validate([
            'product_id' => 'required|int',
        ]);

        // startDate - DateTime.Now()
        // endDate - DateTime.Now() + 7days
        // status - default (Not Paid)
        // user_id - get signed in UserID

        $input['start_date'] = Carbon::now()->format('Y-m-d'); // в формате "2021-06-25 14:06:16"

        $input['end_date'] = Carbon::parse($input['start_date'])->addDays(7)->format('Y-m-d'); // автоматом устанавливается +7 дней

        $input['status'] = "Not Paid";
        //$input->user_id = get_current_user(); // получить юзера который щяс зареган и пытается забронировать
        $input['user_id'] = "TMP User ID";
        dd($input);
        $booking = Booking::create($input);
        $booking->save();

        return response()->json($booking);
    }

    public function updateModel(Request $request, $id)
    {
        $data = $request->json()->all();
        $product_id = $data['product_id'];
        $start_date = $data['start_date'];
        $end_date = $data['end_date'];

        $updateBooking = Booking::findOrFail($id);
        $updateBooking->product_id = $product_id;
        $updateBooking->start_date = $start_date;
        $updateBooking->end_date = $end_date;
        $updateBooking->save();
        return response()->json($updateBooking);
    }

    public function deleteById($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();
        return response()->json("data has been deleted");
    }
}

// лист booking показывает:
// - картинку продукта, название и цену
// - дату брони и дату отмены брони


// статус (оплачен/неоплачен) в Booking
