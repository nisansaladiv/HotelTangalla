<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserRegsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_regs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('roomid')->unsigned();
            $table->foreign('roomid')->references('id')->on('t__rooms');
            $table->string('name');
            $table->string('cuntry');
            $table->string('city');
            $table->string('address');
            $table->date('birthday');
           
            $table->string('phonenumber');
            $table->string('email');
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
        Schema::dropIfExists('user_regs');
    }
}
