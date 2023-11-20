<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePokemoniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemoni', function (Blueprint $table) {
            $table->id();
            $table->string('jmeno', 35);
            $table->string('obrazek', 35);
            $table->integer('mazlivost')->default(0);
            $table->integer('velikost')->default(0);
            $table->enum('typ',
                        ['normální',
                        'elektrický',
                        'ohnivý',
                        'vodní',
                        'travní',
                        'hmyzí',
                        'bojový',
                        'ghost',
                        'legendární',]
                        );
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
        Schema::dropIfExists('pokemoni');
    }
}
