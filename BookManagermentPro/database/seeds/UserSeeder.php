<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
               'username'=>'admin',
               'role'=>'admin',
               'password'=>hash::make(123)
            ]
        );
        DB::table('users')->insert(
            [
               'username'=>'nam',
               'role'=>'user',
               'password'=>hash::make(1234)
            ]
        );
    }
}
