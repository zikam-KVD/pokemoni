<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVlastniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vlastni', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_trenera');
            $table->unsignedBigInteger('id_pokemona');
            $table->timestamps();

            $table->foreign('id_trenera')->on('treneri')->references('id');
            $table->foreign('id_pokemona')->on('pokemoni')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vlastni');
    }
}
