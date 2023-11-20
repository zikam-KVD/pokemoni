<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PokemoniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pokemoni')->insert(
            [
                [
                    "jmeno" => 'Bulbasaur',
                    "obrazek" => "bulba.jpg",
                    "mazlivost" => 2,
                    "velikost" => 2,
                    "typ" => "travní"
                ],
                [
                    "jmeno" => 'Pikachu',
                    "obrazek" => "pikachu.jpg",
                    "mazlivost" => 6,
                    "velikost" => 2,
                    "typ" => "elektrický"
                ],
                [
                    "jmeno" => 'Charmander',
                    "obrazek" => "charma.jpg",
                    "mazlivost" => 1,
                    "velikost" => 2,
                    "typ" => "ohnivý"
                ],
                [
                    "jmeno" => 'Squirtle',
                    "obrazek" => "sq.jpg",
                    "mazlivost" => 3,
                    "velikost" => 2,
                    "typ" => "vodní"
                ]
            ]
        );
    }
}
