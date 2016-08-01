<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReadbookTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('truyen', function (Blueprint $table) {
            $table->increments('id_truyen');
            $table->string('ten_truyen');
            $table->string('link_image');
            $table->integer('id_tacgia');
            $table->integer('views');
            $table->timestamps();
        });
        Schema::create('tacgia', function (Blueprint $table) {
            $table->increments('id_tacgia');
            $table->string('ten_tacgia');
        });

    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('truyen');
          Schema::drop('tacgia');
    }
}
