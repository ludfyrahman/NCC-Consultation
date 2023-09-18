<?php

namespace Database\Seeders;

use Carbon\Carbon;
use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'Super Admin',
            'email' => 'admin@gmail.com',
            'role' => 'Super Admin',
            'password' => bcrypt('password'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'username' => 'Dr adi',
            'email' => 'adi@gmail.com',
            'role' => 'Konsultan',
            'password' => bcrypt('password'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'username' => 'Dr Indra',
            'email' => 'indra@gmail.com',
            'role' => 'Konsultan',
            'password' => bcrypt('password'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'username' => 'udin',
            'email' => 'udin@gmail.com',
            'role' => 'User',
            'password' => bcrypt('password'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

    }
}
