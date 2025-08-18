<?php


use App\Http\Controllers\BatimentController;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\TypeformationController;
use App\Models\Typeformation;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/batiment', [BatimentController::class, 'index']);


Route::get('/eleves', [EleveController::class, 'index'])->name('ajoutEleve');
Route::post('/eleves', [EleveController::class, 'store'])->name('eleves.store');


Route::get('/formation', [FormationController::class, 'index']);


Route::get('/typeformation', [TypeformationController::class, 'index']);


