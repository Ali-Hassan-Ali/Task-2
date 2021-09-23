<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->id();
            $table->string('status')->default('false');
            $table->string('seller')->default('0');
            $table->string('name');
            $table->string('user_name')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone');
            $table->string('image')->default('seller_images/default.png');
            $table->string('country')->nullable();
            $table->text('image_country')->nullable();
            
            //I have a store on
            $table->double('printing_field')->default('0');
            $table->string('redbubble')->default('0');
            $table->string('merch_by_amazon')->default('0');
            $table->string('etsy')->default('0')->default('0');
            $table->string('teespring')->default('0');
            $table->string('spreadshirt')->default('0');
            $table->string('zazzle')->default('0');
            $table->string('teepublic')->default('0');
            $table->string('others')->default('0');

            //To work online, I use .. ?
            $table->string('work_online_lap')->default('0');
            $table->string('work_online_mobile')->default('0');

            //I usually get traffic ?
            $table->string('make_designs_from_social')->nullable();
            $table->string('make_designs_from_paid_ad')->nullable();
            $table->string('make_designs_from_organically')->nullable();
            
            $table->text('stores_links')->nullable();

            $table->text('about_yourself')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('sellers');
    }
}
