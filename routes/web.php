<?php

use App\Http\Controllers\Ecuacion\EcuacionController;
use App\Http\Controllers\inventario2\CategoriaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatrixController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ecuacion', function(){
    return view('Ecuacion.index');

})->name('Ecuacion.index');
//Route::get(  '/categoria', [CategoriaController::class, 'index']);*/

//Route::get('/ecuacion.index', [EcuacionController::class,'index'])->name('ecuacion.index');

Route::get('/ecuacion', [EcuacionController::class, 'index'])->name('ecuacion.index');
Route::post('/ecuacion', [EcuacionController::class, 'store'])->name('ecuacion.store');
Route::get('/matrix', [MatrixController::class, 'showForm'])->name('matrix.form');
Route::post('/matrix', [MatrixController::class, 'processForm'])->name('matrix.process');



