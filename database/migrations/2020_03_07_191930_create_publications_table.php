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
            $table->string('libelle');
            $table->string('image')->nullable();
            $table->text('contenu');
            $table->integer('type_publication_id')->unsigned()->references('id')->on('type_publications')->foreign('type_publication_id')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('auteur_id')->unsigned()->references('id')->on('auteurs')->foreign('auteur_id')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
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
