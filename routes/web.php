<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('conocenos', function () {
    return view('web.conocenos');
})->name('conocenos');

Route::get('servicios', function () {
    return view('web.servicios');
})->name('servicios');

Route::get('servicios/{id}',[ServiceController::class, 'show'] )->name('servicios.show');

Route::get('galeria', function () {
    return view('web.galeria');
})->name('galeria');

Route::get('contactenos', function () {
    return view('web.contactenos');
})->name('contactenos');

Route::post('contactanos',[ContactoController::class, 'store'])->name('contacto.store');
