<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456789'),
            'email_verified_at'=>date('Y-m-d H:i:s'),
            'role'=>'admin',

        ]);

        DB::table('expert_points')->insert([
            'id' => '1',
            'expert_point' => '30',
        ]);

        DB::table('points')->insert([
            'id' => '4',
            'points' => '30',
            'type' => 'Express',
        ]);


        DB::table('points')->insert([
            'id' => '5',
            'points' => '40',
            'type' => 'Priority',
        ]);



    }
}
