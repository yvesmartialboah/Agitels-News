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

        DB::table('interviews')->insert([
            'libelle' => "Rencontre avec le directeur de l'Agence emploi jeune",
            'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae, nostrum optio atque quisquam cum! Voluptates accusamus voluptatem nemo enim laudantium reprehenderit obcaecati fugiat cum delectus ex culpa dolor tempore qui sapiente ipsa debitis quis corporis voluptate, quas, atque ab amet consequuntur. Qui quod quo dolorem placeat perferendis quibusdam aut laboriosam totam adipisci sunt reprehenderit eligendi porro soluta nam, ratione aliquam, cum obcaecati voluptatibus nihil accusantium quae, nostrum non. Alias ratione adipisci similique quo nam, ducimus tempora quaerat asperiores, officia cumque fugiat quam quae tenetur beatae dicta eveniet expedita aspernatur facere repellat laboriosam laudantium modi. Quod, facere. Sequi accusantium in maiores vel vero quis officiis autem assumenda itaque adipisci, animi, dolor modi doloremque aliquid pariatur amet. Sunt nihil ratione alias quisquam, voluptatum soluta illum delectus hic harum, deleniti tempora suscipit nobis laborum doloribus culpa, dicta non libero eos dolores. Dolorem suscipit natus aspernatur nemo minima adipisci iure repellat dolorum ad, inventore perspiciatis voluptate, perferendis obcaecati autem. Sint consequuntur unde, alias voluptates eius illum perferendis magni facere beatae veniam est tenetur minus quos facilis culpa tempore distinctio amet, harum. Voluptates ad laboriosam natus illo hic vero quibusdam voluptatibus culpa neque consequatur, dolorum modi autem tempore fuga voluptate a porro magni. At architecto corrupti error repellat voluptate doloremque adipisci laborum perferendis. Inventore nam aut, dolorum eius odit distinctio impedit quidem rerum, quam rem error voluptas, magnam maiores et cum autem sequi non optio animi sunt quod assumenda sint. Labore, ratione expedita doloremque! Perferendis beatae earum amet illum sequi mollitia sit, repellendus porro sint odit pariatur temporibus modi rem culpa hic ipsum, animi aliquid explicabo, incidunt aut soluta. Nam suscipit similique nisi, iure deserunt? At porro repellendus voluptates eos molestias quis quisquam, animi accusantium, tempora, voluptatum rem quia laborum architecto molestiae, odio soluta eum necessitatibus excepturi? Sequi officia, vero, aspernatur, eius exercitationem laborum distinctio impedit modi consequuntur sit repudiandae ipsum a! Consectetur earum eligendi harum ipsa. Distinctio aliquam voluptates aspernatur voluptate omnis reprehenderit, tempora repellat, voluptatum, architecto similique possimus vel fugiat! Minus ratione, excepturi at, repellat magni voluptatem, consequuntur laboriosam voluptate voluptatibus, maiores dolores enim esse consequatur iusto voluptates necessitatibus in accusamus aliquid praesentium! Dignissimos incidunt adipisci corrupti veniam iste dolores, nemo esse cumque? Pariatur soluta odio cum placeat ullam, asperiores, odit maiores vero culpa, nisi, a at? Nulla quibusdam ratione blanditiis reiciendis est magnam aperiam asperiores libero, qui minima. Vero quas, nemo error enim quia veritatis aperiam ad distinctio? Voluptatum, cum magnam earum vitae dolore ab asperiores tenetur, repellat provident dolorem odio voluptates aliquid incidunt modi! Obcaecati, quam aspernatur laboriosam, odio dolorum repellendus incidunt atque minus autem. Nemo perferendis dolorum, asperiores inventore est ad. Hic impedit, consequatur laudantium, earum dolorem suscipit maiores.",
            'audio_url' => "https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/363147464&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true",
            'video_url' => "",
            'type_interview_id' => 1, // micro-trottoir
            'auteur_id' => 1,
            'statut' => 'audio',
        ]);

        // Poster les interviews audio sur soundclub et les vidéos sur youtube
    }
}
