<?php

use Illuminate\Database\Seeder;

class AlarmsystemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alarmsystem')->insert([
            'mode' => "inactive",
            'securitystatus' => "fine"
        ]);
        DB::table('rooms')->insert([
            'name' => "Wohnzimmer",
            'securitystatus' => "fine"
        ]);
        DB::table('rooms')->insert([
            'name' => "Kinderzimmer",
            'securitystatus' => "fine"
        ]);
        DB::table('rooms')->insert([
            'name' => "Schlafzimmer",
            'securitystatus' => "fine"
        ]);

        DB::table('rooms')->insert([
            'name' => "Ankleidezimmer",
            'securitystatus' => "fine"
        ]);

        DB::table('rooms')->insert([
            'name' => "Esszimmer",
            'securitystatus' => "fine"
        ]);
        DB::table('rooms')->insert([
            'name' => "Großes Bad",
            'securitystatus' => "fine"
        ]);


        DB::table('sensors')->insert([
            'name' => "Fenstersensor 1",
            'wirelessMode' => "433",
            'type'=>'windowOpen',
            'status'=>"closed",
            'unitCode'=>000001,
            'room'=>1
        ]);

        DB::table('sensors')->insert([
            'name' => "Fenstersensor 2",
            'wirelessMode' => "433",
            'type'=>'windowOpen',
            'status'=>"closed",
            'unitCode'=>000002,
            'room'=>1
        ]);

        DB::table('sensors')->insert([
            'name' => "Tempsensor 1",
            'wirelessMode' => "433",
            'type'=>'Temperatur',
            'status'=>"21.00",
            'unitCode'=>000003,
            'room'=>1
        ]);

        DB::table('actors')->insert([
            'name' => "Power Switch 1",
            'wirelessMode' => "433",
            'type'=>'powerswitch',
            'status'=>"off",
            'unitCode'=>000004,
            'room'=>1
        ]);
    }
}
