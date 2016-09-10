<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTimestamps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ashkhaas', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('aqsaam', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('taqsiem', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('hudour', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('tasdjielaat', function (Blueprint $table) {
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
        Schema::table('ashkhaas', function (Blueprint $table) {
            $table->dropColumn(['created_at', 'updated_at']);
        });
        Schema::table('aqsaam', function (Blueprint $table) {
            $table->dropColumn(['created_at', 'updated_at']);
        });
        Schema::table('taqsiem', function (Blueprint $table) {
            $table->dropColumn(['created_at', 'updated_at']);
        });
        Schema::table('hudour', function (Blueprint $table) {
            $table->dropColumn(['created_at', 'updated_at']);
        });
        Schema::table('tasdjielaat', function (Blueprint $table) {
            $table->dropColumn(['created_at', 'updated_at']);
        });
    }
}
