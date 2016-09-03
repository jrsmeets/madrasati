<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAshkhaas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ashkhaas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ism');
            $table->string('ism_aailie');
            $table->date('mawlid');
            $table->boolean('untha');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ashkhaas');
    }
}
