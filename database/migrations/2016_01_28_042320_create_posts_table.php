<?php

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
        //
        Schema::create('posts',function (Blueprint $table){
            $table->increments('id');
            $table->string('title');
            $table->text('text');
            //define la variable
            $table->integer('user_id') ->unsigned();
            $table->timestamps();
            //define la variable como clave foranea
            $table->foreign('user_id') ->references('id')->on('users') ->onDelete('cascade') ->onUpdate('cascade');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //eliminar
        Schema::drop('posts');
    }
}
