<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingRevsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_revs', function (Blueprint $table) {
            $table->increments('id');
            $table->date('checkin');
            $table->date('checkout');
            $table->string('room');
            $table->integer('userid');
            $table->string('name');
            $table->double('price');
            $table->integer('adults');
            $table->integer('children');
            $table->string('cuntry');
            $table->string('city');
            $table->string('email');
            $table->integer('phone');
            $table->string('status');
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
        Schema::dropIfExists('booking_revs');
    }
}
