<?php
use App\Http\Controllers\PruebaController;

use App\Http\Controllers\CuadraticaController;
use App\Http\Controllers\OperacionController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');

});

Route::get('/suma/{num1}/{num2}', [OperacionController::class, 'suma']);
Route::get('/resta/{num1}/{num2}', [OperacionController::class, 'resta']);
Route::get('/multiplicacion/{num1}/{num2}', [OperacionController::class, 'multiplicacion']);
Route::get('/division/{num1}/{num2}', [OperacionController::class, 'division']);








Route::get('/cuadratica', [CuadraticaController::class, 'create'])->name('cuadratica.create');
Route::post('/cuadratica', [CuadraticaController::class, 'store'])->name('cuadratica.store');




Route::resource('prueba', PruebaController::class);

/**() 4 )no olvidame de poner la ruta */