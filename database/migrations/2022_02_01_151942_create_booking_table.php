<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTable extends Migration
{
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id')->nullable();
            $table->foreign('product_id')
                ->references('id')->on('product')->onDelete('cascade');

            $table->string('user_id')->nullable();
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('status')->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('booking');
    }
}
