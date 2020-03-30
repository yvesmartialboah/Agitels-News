<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentInterviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_interviews', function (Blueprint $table) {
            $table->id();
            $table->text('commentaire')->nullable();
            $table->integer('interview_id')->unsigned()->references('id')->on('interviews')
            ->foreign('interview_id');
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
        Schema::dropIfExists('comment_interviews');
    }
}
