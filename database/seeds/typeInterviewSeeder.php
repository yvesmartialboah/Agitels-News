<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class typeInterviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_interviews')->insert([
            'libelle' => "Micro-trottoir"
        ]);

        DB::table('type_interviews')->insert([
            'libelle' => "À la découverte"
        ]);
        
    }
}
