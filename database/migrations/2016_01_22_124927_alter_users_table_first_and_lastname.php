<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUsersTableFirstAndLastname extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::table('users', function($table){
       //     $table->renameColumn('first_name','firstname');
       //     $table->renameColumn('last_name','lastname');
       // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('users', function($table){
            $table->renameColumn('firstname','first_name');
            $table->renameColumn('lastname','last_name');
    });
        //
    }
}
