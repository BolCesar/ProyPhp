<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;
use App\Models\Producto;
use App\Http\Controllers\HomeController;
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


Route::get('/', HomeController::class)->name('home');

Route::controller(ProductoController::class)->group(function () {
    Route::get('/productos', 'index')->name('productos'); //Podría ser también (productos.index)
    Route::get('/productos/create',  'create')->name('productos.create');
    Route::post('/productos', 'store')->name('productos.store');
    Route::get('/productos/{producto}', 'show')->name('productos.show');
    Route::get('/productos/{producto}/edit', 'edit')->name('productos.edit');
    Route::put('/productos/{producto}', 'update')->name('productos.update');
});




