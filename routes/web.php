<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController as AppRegistroController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/servicios', function () {
    return view('servicios');
})->name('servicios');

Route::get('/industria', function () {
    return view('industria');
})->name('industria');

Route::get('/registros', [AppRegistroController::class, 'index'])->name('registros.index');

Route::get('/registros/{id}', [AppRegistroController::class, 'show'])->name('registros.show');

Route::put('registros/{id}', [AppRegistroController::class, 'update'])->name('registros.update');

Route::post('/index', [AppRegistroController::class, 'store'])->name('registros.store');

Route::delete('registros/{id}', [AppRegistroController::class, 'destroy'])->name('registros.destroy');






