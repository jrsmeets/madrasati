<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAqsaam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aqsaam', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sana_id')->unsigned();
            $table->foreign('sana_id')->references('id')->on('sanawaat');
            $table->string('ism');
            $table->mediumInteger('raqam');
            $table->unique(['sana_id', 'raqam']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('aqsaam');
    }
}
