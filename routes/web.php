<?php

use App\Http\Controllers\BatimentController;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\TypeformationController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
// BATIMENTS
Route::get('/batiment', [BatimentController::class, 'index']);

// ELEVES
Route::get('/eleves', [EleveController::class, 'index'])->name('ajoutEleve');
Route::post('/eleves', [EleveController::class, 'store'])->name('eleves.store');
Route::delete('/remove_eleves/{eleve}',[EleveController::class, 'destroy'])->name('remove_eleves');
Route::get('/show/{eleve}',[EleveController::class, 'show'])->name('showEleve');
Route::get('/edit/{eleve}',[EleveController::class, 'edit'])->name('editEleve');
Route::put('/update/{id}',[EleveController::class, 'update'])->name('update_eleves');

// FORMATION
Route::get('/formation', [FormationController::class, 'index']);

// TYPE FORMATION
Route::get('/typeformation', [TypeformationController::class, 'index']);


