<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscontsTable extends Migration
{
    public function up()
    {
        Schema::create('disconts', function (Blueprint $table) {
            $table->id();
            $table->integer('percent');
            $table->integer('product_id');
            $table->foreign('product_id')
                ->references('id')->on('products')->onDelete('cascade');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('disconts');
    }
}
