<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Listado de registros
Route::get('/registros_listar', [RegistroController::class, 'index']);

// Crear un registro
Route::post('/registros_crear', [RegistroController::class, 'store']);

// Editar un registro por su ID
Route::put('/registros_editar/{id}', [RegistroController::class, 'update']);

// Eliminar un registro por su ID
Route::delete('/registros_eliminar/{id}', [RegistroController::class, 'destroy']);
