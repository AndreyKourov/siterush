<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('options', function(Blueprint $table) {
            $table->increments('id');
            $table->string('optionname', 200)->unique();
            $table->timestamps();
        });

        Schema::create('blocks', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('optionid')->unsigned();
            $table->foreign('optionid')->references('id')->on('options')->onDelete('cascade');
            $table->string('title', 200);
            $table->longText('content')->nullable();
            $table->string('imagepath', 255)->nullable();
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
        Schema::dropIfExists('blocks');
        Schema::dropIfExists('options');
    }
}
