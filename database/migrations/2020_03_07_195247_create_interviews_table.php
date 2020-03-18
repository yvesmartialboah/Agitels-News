<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interviews', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->text('description');
            $table->string('audio_url')->nullable();
            $table->string('video_url')->nullable();
            $table->string('statut')->default('video');
            $table->integer('type_interview_id')->unsigned()->references('id')->on('type_interviews')->foreign('type_interview_id')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('interviews');
    }
}
