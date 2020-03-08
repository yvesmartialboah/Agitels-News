<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string('libelle')->nullable();
            $table->string('image')->nullable();
            $table->text('contenu')->nullable();
            $table->integer('type_publication_id')->unsigned()->references('id')->on('type_publications')->foreign('type_publication_id');
            $table->integer('auteur_id')->unsigned()->references('id')->on('auteurs')->foreign('auteur_id');
            $table->timestamps();
        });
        //->onDelete('cascade')->onUpdate('cascade')
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publications');
    }
}
