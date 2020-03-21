<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class typePublicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_publications')->insert([
            'libelle' => "Portrait"
        ]);

		DB::table('type_publications')->insert([
            'libelle' => "Reportage"
        ]);

		DB::table('type_publications')->insert([
            'libelle' => "Affairage"
        ]);

		DB::table('type_publications')->insert([
            'libelle' => "À vous l'honneur"
        ]);

        DB::table('type_publications')->insert([
            'libelle' => "Leçon de vie"
        ]);

        DB::table('type_publications')->insert([
            'libelle' => "Jeux et humour"
        ]);

        DB::table('type_publications')->insert([
            'libelle' => "Anglais"
        ]);

        DB::table('type_publications')->insert([
            'libelle' => "Portail des entreprises"
        ]);
        
    }
}
