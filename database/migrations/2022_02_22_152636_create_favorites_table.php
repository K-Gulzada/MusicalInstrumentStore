<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavoritesTable extends Migration
{
    public function up()
    {
        Schema::create('favorites', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->foreign('product_id')
                ->references('id')->on('products')->onDelete('cascade');
            $table->string('user_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('favorites');
    }
}
