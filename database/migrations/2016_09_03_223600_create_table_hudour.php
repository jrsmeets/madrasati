<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHudour extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hudour', function (Blueprint $table) {
            $table->increments('id');
            $table->date('taariekh');
            $table->integer('qism_id')->unsigned();
            $table->foreign('qism_id')->references('id')->on('aqsaam');
            $table->integer('tasdjiel_id')->unsigned();
            $table->foreign('tasdjiel_id')->references('id')->on('tasdjielaat');
            $table->boolean('haadir')->nullable();
            $table->boolean('muta_akkhar')->default(false);
            $table->string('udhr')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hudour');
    }
}
