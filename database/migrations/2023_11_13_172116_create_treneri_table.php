<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreneriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treneri', function (Blueprint $table) {
            $table->id();
            $table->string('jmeno');
            $table->string('prijmeni');
            $table->smallInteger('vek');
            $table->integer('pocet_pokemonu');
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
        Schema::dropIfExists('treneri');
    }
}
