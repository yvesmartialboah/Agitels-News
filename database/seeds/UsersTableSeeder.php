<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

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
            'name' => "Yves Boah",
            'email' => "yvesmartialboah@gmail.com",
            'password' => bcrypt('59782245'),
            'role' => "membre",
        ]);

        DB::table('users')->insert([
            'name' => "Elaure",
            'email' => "elaure@gmail.com",
            'password' => bcrypt('57507938'),
            'role' => "membre",
        ]);

        DB::table('users')->insert([
            'name' => "Hugues Junior",
            'email' => "samanhugues@gmail.com",
            'password' => bcrypt('88146470'),
            'role' => "membre",
        ]);

        DB::table('users')->insert([
            'name' => "Ahoussi",
            'email' => "ahoussijeanemmanuel@gmail.com",
            'password' => bcrypt('01911339'),
            //'role' => "membre",
        ]);

    }
}
