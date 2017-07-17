<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Posts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts',function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('alias');
            $table->string('description');
            $table->longText('content');
            $table->string('image');
            $table->string('title');
            $table->tinyInteger('cate_id');
            $table->tinyInteger('is_active');
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