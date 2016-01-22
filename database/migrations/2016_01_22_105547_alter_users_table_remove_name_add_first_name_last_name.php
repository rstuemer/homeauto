<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUsersTableRemoveNameAddFirstNameLastName extends Migration
{

    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::table('users', function($table){
            $table->renameColumn('name','username');
            $table->string('firstname', 50)->after('id');
            $table->string('lastname', 50)->after('first_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function($table){
            $table->dropColumn('lastname');
            $table->dropColumn('firstname');
            $table->renameColumn('username','name');

        });
    }

}
