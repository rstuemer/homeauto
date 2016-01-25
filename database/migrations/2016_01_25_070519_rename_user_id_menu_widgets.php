<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameUserIdMenuWidgets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('menu_widget', function (Blueprint $table) {
            $table->renameColumn('user_id','user');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('menu_widget', function (Blueprint $table) {
            $table->renameColumn('user','user_id');
        });
    }
}
