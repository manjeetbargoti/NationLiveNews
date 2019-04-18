<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('post_author');
            $table->boolean('post_comment');
            $table->string('post_title');
            $table->boolean('post_status');
            $table->boolean('comment_status');
            $table->string('post_password');
            $table->string('post_url');
            $table->integer('category');
            $table->integer('country');
            $table->integer('state');
            $table->integer('city');
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
        Schema::dropIfExists('posts');
    }
}
