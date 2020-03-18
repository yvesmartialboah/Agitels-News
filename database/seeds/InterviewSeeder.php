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
            'statut' => 'video',
        ]);

        DB::table('interviews')->insert([
            'libelle' => "Rencontre avec le directeur de l'Agence emploi jeune",
            'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste in incidunt mollitia facere maxime, fuga.",
            'audio_url' => "https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/363147464&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true",
            'video_url' => "",
            'type_interview_id' => 1, // micro-trottoir
            'auteur_id' => 1,
            'statut' => 'audio',
        ]);

        // Poster les interviews audio sur soundclub et les vidéos sur youtube
    }
}
