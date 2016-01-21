<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "rstuemer",
            'email' => "robert.stuemer@gmail.com",
            'password' => bcrypt('123Newton'),
        ]);
    }
}
