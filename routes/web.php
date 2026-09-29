<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiakController;
use App\Http\Controllers\OsztalyController;

Route::get('/', function () {
    return view('welcome');
});
//Osztályok
Route::get('/osztalyok', [OsztalyController::class, 'index'])
    ->name('osztalyok.index');

Route::get('/osztalyok/create', [OsztalyController::class, 'create'])
    ->name('osztalyok.create');

Route::post('/osztalyok', [OsztalyController::class, 'store'])
    ->name('osztalyok.store');

Route::get('/osztalyok/{osztaly}', [OsztalyController::class, 'show'])
    ->name('osztalyok.show');

Route::get('/osztalyok/{osztaly}/edit', [OsztalyController::class, 'edit'])
    ->name('osztalyok.edit');

Route::patch('/osztalyok/{osztaly}', [OsztalyController::class, 'update'])
    ->name('osztalyok.update');

Route::delete('/osztalyok/{osztaly}', [OsztalyController::class, 'destroy'])
    ->name('osztalyok.destroy');

//Diákok
    Route::get('/diakok', [DiakController::class, 'index'])
    ->name('diakok.index');

Route::get('/diakok/create', [DiakController::class, 'create'])
    ->name('diakok.create');

Route::post('/diakok', [DiakController::class, 'store'])
    ->name('diakok.store');

Route::get('/diakok/{osztaly}', [DiakController::class, 'show'])
    ->name('diakok.show');

Route::get('/diakok/{osztaly}/edit', [DiakController::class, 'edit'])
    ->name('diakok.edit');

Route::patch('/diakok/{osztaly}', [DiakController::class, 'update'])
    ->name('diakok.update');

Route::delete('/diakok/{osztaly}', [DiakController::class, 'destroy'])
    ->name('diakok.destroy');
