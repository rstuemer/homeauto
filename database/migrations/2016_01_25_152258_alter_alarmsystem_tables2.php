<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterAlarmsystemTables2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('sensors', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name");
            $table->enum("wirelessMode",['433','866','WIFI',"ENOCEAN","ZIGBEE", "Z-WAVE","INSTEON"]);
            $table->enum("type",['windowOpen','Temperatur','doorOpen','light',"humidity","fire","carbonMonoxid","rain","motion","camera"]);
            $table->string("status");
            $table->integer("unitCode");
            $table->integer("room");

        });

        Schema::create('actors', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name");
            $table->enum("wirelessMode",['433','866','WIFI',"ENOCEAN","ZIGBEE", "Z-WAVE","INSTEON"]);
            $table->enum("type",["powerswitch","alarmSiren","codelock","RFID-lock"]);
            $table->string("status");
            $table->integer("unitCode");
            $table->integer("room");
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
