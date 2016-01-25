<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuWidgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_widget', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("menu");
            $table->integer("widget");
            $table->integer('row');
            $table->integer('col');
            $table->integer('sizex');
            $table->integer('sizey');
            $table->integer("user_id");
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
        Schema::drop('menu_widget');
    }
}
