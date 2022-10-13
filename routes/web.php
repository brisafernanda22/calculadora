<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculadoraController;


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

/*Route::get('/', function () {
    return view('menu');
});*/
Route::get('menu', CalculadoraController::class);
Route::controller(CalculadoraController::class)->group(function(){
    Route::get('menu','__invoke');
    Route::get('suma','suma');
    Route::get('multiplicacion','multiplicacion');
    Route::get('exponente','exponente');
    Route::get('salir','salir');
    
});
