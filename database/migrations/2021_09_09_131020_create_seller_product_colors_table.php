<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellerProductColorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seller_product_colors', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('seller_products_id')->unsigned();
            $table->foreign('seller_products_id')->references('id')->on('seller_products')->onDelete('cascade');

            $table->string('color');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seller_product_colors');
    }
}
