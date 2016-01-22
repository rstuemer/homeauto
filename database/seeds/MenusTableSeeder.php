<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('menu')->insert([
            'name' => "Dashboard",
            'target' => "/dashboard",
        ]);

        DB::table('menu')->insert([
            'name' => "Einstellungen",
            'target' => "/Einstellungen",
        ]);*/

        DB::table('menu')->insert([
            'name' => "Schalter",
            'target' => "/Schalter",
            'parentMenu'=> 2
        ]);

        DB::table('menu')->insert([
            'name' => "Alarmanlage",
            'target' => "/Alarmanlage",
            'parentMenu'=> 2
        ]);
    }
}
