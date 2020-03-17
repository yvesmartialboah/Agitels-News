<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class InterviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('interviews')->insert([
            'libelle' => "Rencontre avec le directeur de Carena",
            'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et qui, cum, impedit accusantium iusto quaerat.",
            'audio_url' => "",
            'video_url' => "https://www.youtube.com/embed/dF78ixCB6qo",
            'type_interview_id' => 2, // A la découverte
            'auteur_id' => 1,
        ]);

        DB::table('interviews')->insert([
            'libelle' => "Rencontre avec le directeur de l'Agence emploi jeune",
            'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste in incidunt mollitia facere maxime, fuga.",
            'audio_url' => "https://www.youtube.com/embed/nf0vCnLzFd4",
            'video_url' => "",
            'type_interview_id' => 1, // micro-trottoir
            'auteur_id' => 1,
        ]);
    }
}
