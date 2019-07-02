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
            $table->integer('users_id');
            $table->integer('post_categories_id');
//            $table->foreign('users_id')->references('id')->on('users');
//            $table->foreign('post_categories_id')->references('id')->on('post_categories');
            $table->string('post_categories');
            $table->string('post_title');
            $table->string('post_details');
            $table->boolean('sell_or_buy');
            $table->integer('price');
            $table->timestamp('created_at')->useCurrent();
//            $table->timestamp('expire_at')->useCurrent() ;
//            $table->timestamps();
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
