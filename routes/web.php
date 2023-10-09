<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
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
Route::get('/categorias', [CategoriaController::class, 'index']);
Route::get('/productos/{categoria}', [ProductoController::class, 'index']);
Route::get('/producto/{id}', [ProductoController::class, 'show']);
Route::get('/', function () {
    return view('welcome');
});
