<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Nette\Utils\DateTime;

class BookingController extends CommonController
{
    /* public function get()
     {
         $booking = Booking::paginate(1);
         return response()->json($booking);
     }*/

    /*public function create(Request $request)
    {
        $input = $request->validate([
            'product_id' => 'required|int',
        ]);

        $input['start_date'] = Carbon::now()->format('Y-m-d'); // в формате "2021-06-25 14:06:16"
        $input['end_date'] = Carbon::parse($input['start_date'])->addDays(7)->format('Y-m-d'); // автоматом устанавливается +7 дней
        $input['status_id'] = 1; // "Not Paid";
        //$input->user_id = get_current_user(); // получить юзера который щяс зареган и пытается забронировать
        $input['user_id'] = "TMP User ID";
        //dd($input);
        $booking = Booking::create($input);
        $booking->save();

        return response()->json($booking);
    }*/

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

   /* public function delete($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();
        return response()->json("data has been deleted");
    }*/

    protected function getClass()
    {
        return app(Booking::class);
    }
}

// лист booking показывает:
// - картинку продукта, название и цену
// - дату брони и дату отмены брони


// статус (оплачен/неоплачен) в Booking

// todo ФУНКЦИОНАЛ для ЮЗЕРА

// todo 1) Юзер может посмотреть все товары (+GetAllProducts)
// todo 2) Фильтрация по категории (+getProductsByCategory)
// todo 2) Фильтрация по ценам (+filterByPrice) (типа от 20К до 60К) (нужно создать два инпута типа number, они будут 2 параметрами метода)
// todo 3) Order By Price (+orderByPriceAsc)
// todo 4) при нажатии на кнопку "забронировать" создается строка на таблице Booking
// todo 5) +пагинация товаров
// todo 6) поиск по названию продукта (+getByProductName)
// todo 7)

