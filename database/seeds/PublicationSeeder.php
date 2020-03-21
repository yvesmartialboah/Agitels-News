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
            'image' => "2.jpg",
            'contenu' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, tempore, voluptates? Corporis tempora excepturi, enim nobis, rerum ea quasi maiores, eius qui quia vel a aperiam. Quis quo voluptatum, qui tempore. Dolorum maxime nemo amet mollitia libero quibusdam! Quis illum odio consequuntur accusamus natus quod accusantium pariatur dicta eius, excepturi.",
            'type_publication_id' => 4, // A vous l'honneur
            'auteur_id' => 1,
        ]); 

        DB::table('publications')->insert([
            'libelle' => "Genie 2020 Agitel",
            'image' => "1.jpg",
            'contenu' => "Elu meilleur étudiant de l'année, rerum ea quasi maiores, eius qui quia vel a aperiam. Quis quo voluptatum, qui tempore. Dolorum maxime nemo amet mollitia libero quibusdam! Quis illum odio consequuntur accusamus natus quod accusantium pariatur dicta eius, excepturi.",
            'type_publication_id' => 7, //Anglais
            'auteur_id' => 1,
        ]);

        DB::table('publications')->insert([
            'libelle' => "Meilleur étudiant",
            'image' => "0.jpg",
            'contenu' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, tempore, voluptates? Corporis tempora excepturi, enim nobis, rerum ea quasi maiores, eius qui quia vel a aperiam. Quis quo voluptatum, qui tempore. Dolorum maxime nemo amet mollitia libero quibusdam! Quis illum odio consequuntur accusamus natus quod accusantium pariatur dicta eius, excepturi.",
            'type_publication_id' => 2, // Reportage
            'auteur_id' => 1,
        ]); 

        DB::table('publications')->insert([
            'libelle' => "Jeune entrepreneur",
            'image' => "3.jpg",
            'contenu' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, tempore, voluptates? Corporis tempora excepturi, enim nobis, rerum ea quasi maiores, eius qui quia vel a aperiam. Quis quo voluptatum, qui tempore. Dolorum maxime nemo amet mollitia libero quibusdam! Quis illum odio consequuntur accusamus natus quod accusantium pariatur dicta eius, excepturi.",
            'type_publication_id' => 5, // Leçon de vie
            'auteur_id' => 1,
        ]); 

        DB::table('publications')->insert([
            'libelle' => "La BAD recrute",
            'image' => "3.jpg",
            'contenu' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, tempore, voluptates? Corporis tempora excepturi, enim nobis, rerum ea quasi maiores, eius qui quia vel a aperiam. Quis quo voluptatum, qui tempore. Dolorum maxime nemo amet mollitia libero quibusdam! Quis illum odio consequuntur accusamus natus quod accusantium pariatur dicta eius, excepturi.",
            'type_publication_id' => 8, // Portail des entreprises
            'auteur_id' => 1,
        ]);

        DB::table('publications')->insert([
            'libelle' => "Orange recrute",
            'image' => "0.jpg",
            'contenu' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, tempore, voluptates? Corporis tempora excepturi, enim nobis, rerum ea quasi maiores, eius qui quia vel a aperiam. Quis quo voluptatum, qui tempore. Dolorum maxime nemo amet mollitia libero quibusdam! Quis illum odio consequuntur accusamus natus quod accusantium pariatur dicta eius, excepturi.",
            'type_publication_id' => 8, // Portail des entreprises
            'auteur_id' => 1,
        ]);

        DB::table('publications')->insert([
            'libelle' => "MTN recrute",
            'image' => "0.jpg",
            'contenu' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, tempore, voluptates? Corporis tempora excepturi, enim nobis, rerum ea quasi maiores, eius qui quia vel a aperiam. Quis quo voluptatum, qui tempore. Dolorum maxime nemo amet mollitia libero quibusdam! Quis illum odio consequuntur accusamus natus quod accusantium pariatur dicta eius, excepturi.",
            'type_publication_id' => 8, // Portail des entreprises
            'auteur_id' => 1,
        ]); 

        DB::table('publications')->insert([
            'libelle' => "Mr BOUADY à encore bloqué un télephone",
            'image' => "1.jpg",
            'contenu' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, tempore, voluptates? Corporis tempora excepturi, enim nobis, rerum ea quasi maiores, eius qui quia vel a aperiam. Quis quo voluptatum, qui tempore. Dolorum maxime nemo amet mollitia libero quibusdam! Quis illum odio consequuntur accusamus natus quod accusantium pariatur dicta eius, excepturi.",
            'type_publication_id' => 3, // Affairage
            'auteur_id' => 1,
        ]);

        DB::table('publications')->insert([
            'libelle' => "Une soutenance est prévu ce mardi",
            'image' => "1.jpg",
            'contenu' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, tempore, voluptates? Corporis tempora excepturi, enim nobis, rerum ea quasi maiores, eius qui quia vel a aperiam. Quis quo voluptatum, qui tempore. Dolorum maxime nemo amet mollitia libero quibusdam! Quis illum odio consequuntur accusamus natus quod accusantium pariatur dicta eius, excepturi.",
            'type_publication_id' => 3, // Affairage
            'auteur_id' => 1,
        ]); 

        DB::table('publications')->insert([
            'libelle' => "Une sanction à été levé contre les étudiant",
            'image' => "1.jpg",
            'contenu' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, tempore, voluptates? Corporis tempora excepturi, enim nobis, rerum ea quasi maiores, eius qui quia vel a aperiam. Quis quo voluptatum, qui tempore. Dolorum maxime nemo amet mollitia libero quibusdam! Quis illum odio consequuntur accusamus natus quod accusantium pariatur dicta eius, excepturi.",
            'type_publication_id' => 3, // Affairage
            'auteur_id' => 1,
        ]);

        DB::table('publications')->insert([
            'libelle' => "Une sanction à été levé contre les professeurs",
            'image' => "1.jpg",
            'contenu' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, tempore, voluptates? Corporis tempora excepturi, enim nobis, rerum ea quasi maiores, eius qui quia vel a aperiam. Quis quo voluptatum, qui tempore. Dolorum maxime nemo amet mollitia libero quibusdam! Quis illum odio consequuntur accusamus natus quod accusantium pariatur dicta eius, excepturi.",
            'type_publication_id' => 3, // Affairage
            'auteur_id' => 1,
        ]);

        DB::table('publications')->insert([
            'libelle' => "Une sanction à été levé contre XXXX",
            'image' => "1.jpg",
            'contenu' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, tempore, voluptates? Corporis tempora excepturi, enim nobis, rerum ea quasi maiores, eius qui quia vel a aperiam. Quis quo voluptatum, qui tempore. Dolorum maxime nemo amet mollitia libero quibusdam! Quis illum odio consequuntur accusamus natus quod accusantium pariatur dicta eius, excepturi.",
            'type_publication_id' => 3, // Affairage
            'auteur_id' => 1,
        ]); 

        DB::table('publications')->insert([
            'libelle' => "Elu meilleur étudiant",
            'image' => "1.jpg",
            'contenu' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, tempore, voluptates? Corporis tempora excepturi, enim nobis, rerum ea quasi maiores, eius qui quia vel a aperiam. Quis quo voluptatum, qui tempore. Dolorum maxime nemo amet mollitia libero quibusdam! Quis illum odio consequuntur accusamus natus quod accusantium pariatur dicta eius, excepturi.",
            'type_publication_id' => 1, // Portrait
            'auteur_id' => 1,
        ]);

        DB::table('publications')->insert([
            'libelle' => "Elu meilleur professeur",
            'image' => "1.jpg",
            'contenu' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, tempore, voluptates? Corporis tempora excepturi, enim nobis, rerum ea quasi maiores, eius qui quia vel a aperiam. Quis quo voluptatum, qui tempore. Dolorum maxime nemo amet mollitia libero quibusdam! Quis illum odio consequuntur accusamus natus quod accusantium pariatur dicta eius, excepturi.",
            'type_publication_id' => 1, // Portrait
            'auteur_id' => 1,
        ]);

        DB::table('publications')->insert([
            'libelle' => "Elu XXXX",
            'image' => "1.jpg",
            'contenu' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, tempore, voluptates? Corporis tempora excepturi, enim nobis, rerum ea quasi maiores, eius qui quia vel a aperiam. Quis quo voluptatum, qui tempore. Dolorum maxime nemo amet mollitia libero quibusdam! Quis illum odio consequuntur accusamus natus quod accusantium pariatur dicta eius, excepturi.",
            'type_publication_id' => 1, // Portrait
            'auteur_id' => 1,
        ]); 

        DB::table('publications')->insert([
            'libelle' => "Partie de football contre les TCF",
            'image' => "1.jpg",
            'contenu' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, tempore, voluptates? Corporis tempora excepturi, enim nobis, rerum ea quasi maiores, eius qui quia vel a aperiam. Quis quo voluptatum, qui tempore. Dolorum maxime nemo amet mollitia libero quibusdam! Quis illum odio consequuntur accusamus natus quod accusantium pariatur dicta eius, excepturi.",
            'type_publication_id' => 6, // Jeux et humour
            'auteur_id' => 1,
        ]); 

        DB::table('publications')->insert([
            'libelle' => "Vainqueur de la coupe 2019",
            'image' => "1.jpg",
            'contenu' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, tempore, voluptates? Corporis tempora excepturi, enim nobis, rerum ea quasi maiores, eius qui quia vel a aperiam. Quis quo voluptatum, qui tempore. Dolorum maxime nemo amet mollitia libero quibusdam! Quis illum odio consequuntur accusamus natus quod accusantium pariatur dicta eius, excepturi.",
            'type_publication_id' => 6, // Jeux et humour
            'auteur_id' => 1,
        ]);

        DB::table('publications')->insert([
            'libelle' => "Elu meilleur Joueur",
            'image' => "1.jpg",
            'contenu' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, tempore, voluptates? Corporis tempora excepturi, enim nobis, rerum ea quasi maiores, eius qui quia vel a aperiam. Quis quo voluptatum, qui tempore. Dolorum maxime nemo amet mollitia libero quibusdam! Quis illum odio consequuntur accusamus natus quod accusantium pariatur dicta eius, excepturi.",
            'type_publication_id' => 6, // Jeux et humour
            'auteur_id' => 1,
        ]);

        DB::table('publications')->insert([
            'libelle' => "Elu XXXX",
            'image' => "1.jpg",
            'contenu' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, tempore, voluptates? Corporis tempora excepturi, enim nobis, rerum ea quasi maiores, eius qui quia vel a aperiam. Quis quo voluptatum, qui tempore. Dolorum maxime nemo amet mollitia libero quibusdam! Quis illum odio consequuntur accusamus natus quod accusantium pariatur dicta eius, excepturi.",
            'type_publication_id' => 6, // Jeux et humour
            'auteur_id' => 1,
        ]);

    }
}
