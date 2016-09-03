<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTasdjielaat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasdjielaat', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sana_id')->unsigned();
            $table->integer('tilmiedh_id')->unsigned();
            $table->foreign('sana_id')->references('id')->on('sanawaat');
            $table->foreign('tilmiedh_id')->references('id')->on('ashkhaas');
            $table->mediumInteger('musaddjal')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tasdjielaat');
    }
}
