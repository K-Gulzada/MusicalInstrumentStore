<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Booking extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ["product_id", "start_date", "end_date", "status_id", "user_id"];

    public function myValidator(Request $request)
    {
        $data = $request->validate([
            'product_id' => 'required|int',
        ]);

        $data['start_date'] = Carbon::now()->format('Y-m-d'); // в формате "2021-06-25 14:06:16"
        $data['end_date'] = Carbon::parse($data['start_date'])->addDays(7)->format('Y-m-d'); // автоматом устанавливается +7 дней
        $data['status_id'] = 18; // "Not Paid";
        //$input->user_id = get_current_user(); // получить юзера который щяс зареган и пытается забронировать
        $data['user_id'] = "TMP User ID";

        return $data;
    }

}

