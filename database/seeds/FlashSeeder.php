<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class FlashSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flashes')->insert([
            'flashinfo' => "Confinement d'un mois (1) pour preventir le Corona virus"
        ]);

        DB::table('flashes')->insert([
            'flashinfo' => "Rencontre avec le directeur de Carena"
        ]);

        DB::table('flashes')->insert([
            'flashinfo' => "Cérémonie de parrainage de l'AE2I"
        ]);
    }
}
