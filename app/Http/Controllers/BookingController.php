<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function getAll()
    {
        return response()->json(Booking::all());
    }

    public function createModel(Request $request)
    {
        $input = $request->validate([
            'productId' => 'required|int',
        ]);

    /*    $dt = new DateTime();
        $nowDate = $dt->format('Y-m-d H:i');

        if($nowDate < $input['startDate'])
        {

        }
        else return "не верная дата";*/

        $booking=Booking::create($input);
        $booking->save();

        return response()->json($booking);
        //return response()->json("New Object successfully created");
    }

    public function updateModel(Request $request , $id)
    {
        $data =  $request->json()->all();
        $productId = $data['productId'];
        $startDate = $data['startDate'];
        $endDate = $data['endDate'];

        $updateBooking = Booking::findOrFail($id);
        $updateBooking->productId =$productId;
        $updateBooking->startDate =$startDate;
        $updateBooking->endDate =$endDate;
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
