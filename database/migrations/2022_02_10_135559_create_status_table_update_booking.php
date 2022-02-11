<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusTableUpdateBooking extends Migration
{
    public function up()
    {
        Schema::create('statuses', function (Blueprint $table) {
            $table->id();
            $table->string('status_text');
        });

        Schema::table('bookings', function (Blueprint $table) {
            $table->integer('status_id')->nullable();
            $table->foreign('status_id')
                ->references('id')->on('statuses')->onDelete('cascade');

            $table->dropColumn('status');
        });
    }

    public function down()
    {
        Schema::dropIfExists('statuses');
        Schema::table('bookings', function (Blueprint $table) {
            $table->string('status')->nullable();
            $table->dropColumn('status_id');
        });
    }
}
