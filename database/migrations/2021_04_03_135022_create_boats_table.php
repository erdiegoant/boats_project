<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoatsTable extends Migration
{
    public function up()
    {
        Schema::create('boats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            // boat details
            $table->string('title');
            $table->text('description');
            $table->string('make');
            $table->string('model');
            $table->integer('year');
            $table->string('boat_type');
            $table->float('boat_length');
            $table->float('hourly_price');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            // boat features
            $table->integer('capacity');
            $table->integer('cabins');
            $table->integer('toilets');
            $table->string('captained'); // enum: "BAREBOAT", "ADDON", "INCLUDED"
            $table->boolean('active')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('boats');
    }
}
