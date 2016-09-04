<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTaqsiem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taqsiem', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('qism_id')->unsigned();
            $table->foreign('qism_id')->references('id')->on('aqsaam');
            $table->integer('tasdjiel_id')->unsigned();
            $table->foreign('tasdjiel_id')->references('id')->on('tasdjielaat');
            $table->date('bidaya')->nullable();
            $table->date('nihaya')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('taqsiem');
    }
}
