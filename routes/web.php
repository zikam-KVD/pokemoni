<?php

use App\Http\Controllers\PokemoniController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//zajistuje zobrazovani pokemonu
Route::get(
    '/pokemoni',
    [PokemoniController::class, 'vypis']
)->name('prehled');

//zajistuje mazani pokemonu
Route::post(
    '/pokemon/smazat/{id}',
    [PokemoniController::class, 'delete']
)->name('pokemon-smazat');

Route::post(
    '/pokemon/pridat',
    [PokemoniController::class, 'pridat']
)->name('pokemon-pridat');
