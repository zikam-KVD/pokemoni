<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PokemoniController extends Controller
{
    public function vypis()
    {
        $pokemoni = DB::table('pokemoni')->get();

        return view('prehledPokemonu', ['vysledkyzDB' => $pokemoni]);
    }

    public function delete(int $id)
    {
        $pokemon = DB::table('pokemoni')->where('id', $id)->delete();

        return back()->with('alert', "Proběhlo smazání pokémona."); //nutno overit
    }

    public function pridat(Request $request)
    {
        DB::table('pokemoni')->insert([
            "jmeno" => $request->jmeno,
            "obrazek" => "X.jpg",
            "mazlivost" => $request->mazlivost,
            "velikost" => $request->velikost,
            "typ" => $request->typ
        ]);

        return back()->with('alert', "Proběhlo vloženíí pokémona.");
    }
}
