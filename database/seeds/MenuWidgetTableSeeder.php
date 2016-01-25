<?php

use Illuminate\Database\Seeder;

class MenuWidgetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $rows = 3;
        $cols = 2;

        for($row=1;$row<=$rows;$row++)
            for($col=1;$col<=$cols;$col++)
                DB::table('menu_widget')->insert([
                    "menu"=>1,
                    "user"=>2,
                    "widget"=>1,
                    "row"=>$row,
                    "col" =>$col,
                    "sizex"=>1,
                    "sizey"=>1
                ]);
    }
}
