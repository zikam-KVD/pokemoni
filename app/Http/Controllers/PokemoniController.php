<?php

namespace App\Http\Controllers;

use App\Models\Pokemoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PokemoniController extends Controller
{
    public function vypis()
    {
        $pokemoni = Pokemoni::all();

        return view('prehledPokemonu', ['vysledkyzDB' => $pokemoni]);
    }

    public function delete(int $id)
    {
        $pokemon = Pokemoni::find($id);
        $pokemon->delete();
        //->where('id', )->delete();

        return back()->with('alert', "Proběhlo smazání pokémona."); //nutno overit
    }

    public function pridat(Request $request)
    {
/*
        if (null == $request->jmeno) {
            return back()->withErrors(['error' => "Jméno musí být vyplněné."]);
        }*/

        $validated = $request->validate([
            'jmeno' => 'required|string|max:10',
            'mazlivost' => 'required|integer|min:1|max:10',
            'velikost' => 'required|integer|max:10|min:1',
            'typ' => 'required|in:normální,travní,bojový',
        ]);


        /** @var Pokemoni $pokemon */
        $pokemon = new Pokemoni([
            'mazlivost' => $request->mazlivost,
            'jmeno' => $validated['jmeno'],
            'velikost' => $request->velikost,
            'typ' => $request->typ,
        ]);

        //dd($pokemon);

        //$pokemon->jmeno = ;
        //$pokemon->obrazek = "ditto.jpg";
        //$pokemon->mazlivost = $request->mazlivost;
        //$pokemon->velikost = $request->velikost;
        //$pokemon->typ = $request->typ;
        $pokemon->save();
        /*
        DB::table('pokemoni')->insert([
            "jmeno" => $request->jmeno,
            "obrazek" => "X.jpg",
            "mazlivost" => $request->mazlivost,
            "velikost" => $request->velikost,
            "typ" => $request->typ
        ]);
        */
        return back()->with('alert', "Proběhlo vloženíí pokémona.");
    }
}
