<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('catigory_id');
            $table->string('name');
            $table->string('description');
            $table->string('address');
            $table->string('publisher');
            $table->string('author');
            $table->string('book_image');
            $table->string('publishing_year');
            $table->timestamps();

             $table->foreign('catigory_id')->references('id')->on('catigory')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book');
    }
}
