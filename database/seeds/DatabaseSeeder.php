<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        	UsersTableSeeder::class,
        	typeInterviewSeeder::class,
        	typePublicationSeeder::class,
            AuthorSeed::class,
            InterviewSeeder::class,
            PublicationSeeder::class,
            FlashSeeder::class
        ]);
    }
}
