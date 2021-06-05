<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingsTable extends Migration
{
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('boat_id');
            $table->unsignedBigInteger('booking_id');
            $table->float('stars');
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ratings');
    }
}
