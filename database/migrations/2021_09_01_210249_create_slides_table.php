<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slides', function (Blueprint $table) {
            $table->id();
            $table->integer('admin_id');
            $table->tinyInteger('active')->default(1);
            $table->string('title_en')->nullable();
            $table->string('big_title_en')->nullable();
            $table->string('sub_title_en')->nullable();
            $table->string('title_ar')->nullable();
            $table->string('big_title_ar')->nullable();
            $table->string('sub_title_ar')->nullable();
            $table->text('image');
            $table->text('link')->nullable();
            $table->string('button_text_en');
            $table->string('button_text_ar');
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
        Schema::dropIfExists('slides');
    }
}
