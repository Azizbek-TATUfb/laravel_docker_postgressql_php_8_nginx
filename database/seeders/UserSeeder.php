<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'fullname' => 'Mr Thomson',
            'email' => 'admin@g.c',
            'password' => Hash::make('123'),
        ]);
        DB::table('users')->insert([
            'name' => 'super',
            'fullname' => 'Development',
            'email' => 'super@g.c',
            'password' => Hash::make('123456'),
        ]);
    }
}
