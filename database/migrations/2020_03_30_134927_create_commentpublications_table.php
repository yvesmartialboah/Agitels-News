<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentpublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentpublications', function (Blueprint $table) {
            $table->id();
            $table->text('commentaire')->nullable();
            $table->integer('publication_id')->unsigned()->references('id')->on('publications')
            ->foreign('publication_id');
            $table->integer('user_id')->unsigned()->references('id')->on('users')->foreign('user_id');
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
        Schema::dropIfExists('commentpublications');
    }
}
