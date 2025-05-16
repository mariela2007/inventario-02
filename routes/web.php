<?php

use App\Http\Controllers\Ecuacion\EcuacionController;
use App\Http\Controllers\inventario2\CategoriaController;
use Illuminate\Support\Facades\Route;


/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/ecuacion', function(){
    return view('Ecuacion.index');

})->name('Ecuacion.index');
//Route::get(  '/categoria', [CategoriaController::class, 'index']);*/

//Route::get('/ecuacion.index', [EcuacionController::class,'index'])->name('ecuacion.index');

Route::get('/ecuacion/index', [EcuacionController::class, 'index'])->name('ecuacion.index');
Route::post('/ecuacion/store', [EcuacionController::class, 'store'])->name('ecuacion.store');







