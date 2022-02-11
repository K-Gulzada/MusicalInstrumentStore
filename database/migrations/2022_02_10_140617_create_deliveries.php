<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveries extends Migration
{
    public function up()
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('phone_number')->nullable();
            $table->integer('price')->nullable();

            $table->integer('status_id')->nullable();
            $table->foreign('status_id')
                ->references('id')->on('statuses')->onDelete('cascade');
            $table->date('ordered_date')->nullable();
            $table->date('delivered_date');
        });
    }

    public function down()
    {
        Schema::dropIfExists('deliveries');
    }
}
