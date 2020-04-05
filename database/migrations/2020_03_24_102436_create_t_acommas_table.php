<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTAcommasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_acommas', function (Blueprint $table) {
            $table->increments('id');
            $table->date('sdate');
            $table->date('edate');
            $table->integer('numnight');
            $table->integer('adults');
            $table->integer('children');
            $table->integer('roomID');
            $table->integer('Status');
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
        Schema::dropIfExists('t_acommas');
    }
}
