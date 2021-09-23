<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellerProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seller_products', function (Blueprint $table) {
            $table->id();
            $table->string('store_id')->nullable();
            $table->string('category_id');
            $table->string('product_id');

            $table->string('default_color')->nullable();

            $table->string('logo');
            $table->string('logo_width')->nullable();
            $table->string('logo_height')->nullable();
            
            $table->string('bg_image')->default('back');
            $table->string('translate')->nullable();

            $table->string('title');
            $table->string('tag');
            $table->text('description');
            $table->double('price');
            $table->double('selling_price')->default(0);
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
        Schema::dropIfExists('seller_products');
    }
}
