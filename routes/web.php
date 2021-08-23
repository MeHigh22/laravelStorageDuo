<?php

use App\Http\Controllers\GenreController;
use App\Http\Controllers\MembreController;
use App\Models\Membre;
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
    $Membre = Membre::all();
    return view('welcome', compact('Membre'));
});

Route::get("download/{id}", [MembreController::class, 'download']);

Route::resource('membres', MembreController::class);

Route::resource('genres', GenreController::class);
