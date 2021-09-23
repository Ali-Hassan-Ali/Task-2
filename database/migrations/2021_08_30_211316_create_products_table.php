<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('image_front')->default('product_image/front-default.png');
            $table->string('image_back')->default('product_image/back-default.png');
            $table->integer('category_id');
            $table->integer('admin_id');
            $table->string('name_ar');
            $table->string('name_en');
            $table->double('price' , 8 , 2);
            $table->text('description_ar')->nullable();
            $table->text('description_en')->nullable();
            $table->tinyInteger('active')->default(1);
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
        Schema::dropIfExists('products');
    }
}
