<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class AuthorSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('auteurs')->insert([
            'nom' => "BOAH",
            'prenom' => "YVES MARTIAL",
            'contact' => "57869730",
            'email' => "yvesmartialboah@gmail.com",
            'filiere' => "INFORMATIQUE",
            'fonction' => "INGENIEUR GENIE LOGICIEL",
        ]);
    }
}
