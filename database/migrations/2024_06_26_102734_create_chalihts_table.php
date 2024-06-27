<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChalihtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chalihts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('thumb_image');
            $table->json('images');
            $table->string('category');
            $table->string('state');
            $table->integer('stars');
            $table->string('dgree');
            $table->string('price');
            $table->string('discout');
            $table->boolean('have_pool')->nullable();
            $table->longText('description');
            $table->mediumText('map')->nullable();
            $table->string('phone')->nullable();
            $table->string('whatsapp')->nullable();



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
        Schema::dropIfExists('chalihts');
    }
}
