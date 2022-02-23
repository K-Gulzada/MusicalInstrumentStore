<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameTables extends Migration
{
    public function up()
    {
        Schema::rename('product', "products");
        Schema::rename('category', "categories");
        Schema::rename('booking', "bookings");
        //
    }

    public function down()
    {
        //
        Schema::rename('products', "product");
        Schema::rename('categories', "category");
        Schema::rename('bookings', "booking");
    }
}
