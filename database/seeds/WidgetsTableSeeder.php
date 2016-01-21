<?php

use Illuminate\Database\Seeder;

class WidgetsTableSeeder extends Seeder
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
        DB::table('widgets')->insert([
            'name' => "test".$row.$col,
            "row"=>$row,
            "col" =>$col,
            "sizex"=>1,
            "sizey"=>1
        ]);
    }
}
