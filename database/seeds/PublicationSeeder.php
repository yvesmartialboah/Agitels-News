<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PublicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publications')->insert([
            'libelle' => "Cérémonie de Parainage",
            'image' => "https://loremflickr.com/640/360",
            'contenu' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, tempore, voluptates? Corporis tempora excepturi, enim nobis, rerum ea quasi maiores, eius qui quia vel a aperiam. Quis quo voluptatum, qui tempore. Dolorum maxime nemo amet mollitia libero quibusdam! Quis illum odio consequuntur accusamus natus quod accusantium pariatur dicta eius, excepturi.",
            'type_publication_id' => 2, // reportage
            'auteur_id' => 1,
        ]);

        DB::table('publications')->insert([
            'libelle' => "Genie 2020 Agitel",
            'image' => "https://placebeard.it/640x360",
            'contenu' => "Elu meilleur étudiant de l'année, rerum ea quasi maiores, eius qui quia vel a aperiam. Quis quo voluptatum, qui tempore. Dolorum maxime nemo amet mollitia libero quibusdam! Quis illum odio consequuntur accusamus natus quod accusantium pariatur dicta eius, excepturi.",
            'type_publication_id' => 1, //portrait
            'auteur_id' => 1,
        ]);
    }
}
