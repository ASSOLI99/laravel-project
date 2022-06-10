<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('catigory_id');
            $table->unsignedBigInteger('user_id_oner');
            $table->unsignedBigInteger('user_id_request');
            $table->boolean('states');
            $table->timestamps();

            
            $table->foreign('catigory_id')->references('id')->on('catigory')->onDelete('cascade');
            $table->foreign('user_id_oner')->references('id')->on('user')->onDelete('cascade');
            $table->foreign('user_id_request')->references('id')->on('user')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post');
    }
}
