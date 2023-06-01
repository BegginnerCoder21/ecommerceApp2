<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('accueil');
})->name('enchere.acceuil');

Route::get('/acceuil', function () {
    return view('accueil');
})->name('enchere.acceuil');

Route::get('/montre', function () {
    return view('montre');
})->name('enchere.montre');

Route::get('/livre', function () {
    return view('livre');
})->name('enchere.livre');

Route::get('/meuble', function () {
    return view('meuble');
})->name('enchere.meuble');

Route::get('/art', function () {
    return view('art');
})->name('enchere.art');

Route::get('/portrait', function () {
    return view('portrait');
})->name('enchere.portrait');

Route::get('/voiture', function () {
    return view('vehicule');
})->name('enchere.voiture');

Route::get('/chaine', function () {
    return view('chaine');
})->name('enchere.chaine');

Route::get('/sculpture', function () {
    return view('sculpture');
})->name('enchere.sculpture');

Route::get('/musique', function () {
    return view('musique');
})->name('enchere.musique');

Route::get('/jouet', function () {
    return view('jouet');
})->name('enchere.jouet');

Route::get('/couvert', function () {
    return view('couvert');
})->name('enchere.couvert');

Route::get('/electromenager', function () {
    return view('electromenager');
})->name('enchere.electromenager');


Route::get('/login1', 'App\Http\Controllers\Auth\AuthenticatedSessionController@create')->name('teg');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/acheter', [ProduitController::class, 'acheter'])->name('enchere.acheter');
Route::middleware('auth')->group(function () {
    Route::get('/encherir1', [ProduitController::class, 'encherir1'])->name('enchere.encherir1');
    Route::get('/encherir2', [ProduitController::class, 'encherir2'])->name('enchere.encherir2');
    Route::get('/encherir3', [ProduitController::class, 'encherir3'])->name('enchere.encherir3');
    Route::get('/encherir4', [ProduitController::class, 'encherir4'])->name('enchere.encherir4');
    Route::get('/encherir5', [ProduitController::class, 'encherir5'])->name('enchere.encherir5');
    Route::get('/encherir6', [ProduitController::class, 'encherir6'])->name('enchere.encherir6');
    Route::get('/encherir7', [ProduitController::class, 'encherir7'])->name('enchere.encherir7');
    Route::get('/encherir8', [ProduitController::class, 'encherir8'])->name('enchere.encherir8');
    Route::get('/encherir8', [ProduitController::class, 'encherir8'])->name('enchere.encherir8');
    Route::get('/encherir9', [ProduitController::class, 'encherir9'])->name('enchere.encherir9');
    Route::get('/encherir10', [ProduitController::class, 'encherir10'])->name('enchere.encherir10');
    Route::get('/encherir11', [ProduitController::class, 'encherir11'])->name('enchere.encherir11');
    Route::get('/encherir12', [ProduitController::class, 'encherir12'])->name('enchere.encherir12');
    Route::get('/encherir5', [ProduitController::class, 'encherir5'])->name('enchere.encherir5');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
