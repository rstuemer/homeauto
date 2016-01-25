<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterAlarmsystemTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('sensors', function (Blueprint $table) {
            $table->drop('alarmSystem');
               $table->foreign('room')->references('id')->on('rooms');
        });

        Schema::table('actors', function (Blueprint $table) {
            $table->drop('alarmSystem');
            $table->foreign('room')->references('id')->on('rooms');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sensors', function (Blueprint $table) {
            $table->integer('alarmSystem');

        });

        Schema::table('actors', function (Blueprint $table) {
            $table->integer('alarmSystem');
        });
    }
}
