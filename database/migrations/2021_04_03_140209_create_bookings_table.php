<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('boat_id');
            $table->unsignedBigInteger('user_id');
            $table->dateTime('date');
            $table->dateTime('end_date');
            $table->integer('passengers');
            $table->float('amount_to_bill');
            $table->float('discount');
            $table->string('status'); // enum: "APPROVED", "REJECTED"
            $table->string('coupon_code')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
