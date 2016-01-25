<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlarmsystem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        Schema::create('alarmsystem', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('mode',['inactive','athome','active']);
            $table->enum('securitystatus',['fine','alert']);
        });

        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name");
            $table->enum('securitystatus',['fine','alert']);

        }); */

        Schema::create('sensors', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name");
            $table->enum("wirelessMode",['433','866','WIFI',"ENOCEAN","ZIGBEE", "Z-WAVE","INSTEON"]);
            $table->enum("type",['windowOpen','Temperatur','doorOpen','light',"humidity","fire","carbonMonoxid","rain","motion","camera"]);
            $table->string("status");
            $table->integer("unitCode");
            $table->integer("room_id");
            $table->integer("alarmSystem");
            //$table->foreign('room_id')
              //  ->references('id')->on('rooms');
           // $table->foreign('alarmSystem')
                //->references('id')->on('alarmsystem');
        });
        /*
        Schema::create('actors', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name");
            $table->enum("wirelessMode",['433','866','WIFI',"ENOCEAN","ZIGBEE", "Z-WAVE","INSTEON"]);
            $table->enum("type",["powerswitch","alarmSiren","codelock","RFID-lock"]);
            $table->string("status");
            $table->integer("unitCode");
            $table->integer("room");
            $table->integer("alarmSystem");
         //   $table->foreign('room')
           //     ->references('id')->on('rooms');
          //  $table->foreign('alarmSystem')
             //   ->references('id')->on('alarmsystem');
        });
*/

       /* Schema::create('log', function (Blueprint $table) {
            $table->increments('id');
            $table->string("status");
            $table->morphs("loggable");
            $table->enum('securitystatus',['fine','alert']);

        });*/

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('alarmsystem');
        Schema::drop('rooms');
        Schema::drop('actors');
        Schema::drop('sensors');
        Schema::drop('log');

    }
}
