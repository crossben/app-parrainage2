<?php

use App\Http\Controllers\ProgrammeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ElecteurController;
use App\Http\Controllers\VoteController;
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
    return view('welcome');
});

// routes/web.php


// Route pour afficher le formulaire
Route::get('/electeur/create', [ElecteurController::class, 'createForm'])->name('electeur.create');

// Route pour traiter le formulaire soumis
Route::post('/electeur/submit', [ElecteurController::class, 'submitForm'])->name('electeur.submit');
Route::get('/liste-candidat', [ElecteurController::class, 'listeCandidat'])->name('liste-candidat');
Route::get('/voter/{candidat}', [VoteController::class, 'voterForm'])->name('candidat.confirm');
Route::get('/confirmed', [VoteController::class, 'confirm'])->name('candidat.confirmed');
Route::get('/unconfirmed', [VoteController::class, 'unconfirm'])->name('candidat.unconfirm');
///Route::post('/voter', [VoteController::class, 'validerVote'])->name('voter.valider');
Route::get('/page-de-confirmation', function(){
    return view('hehe');
});

// routes/web.php


Route::get('/programmes', [ProgrammeController::class, 'index'])->name('programmes.index');
