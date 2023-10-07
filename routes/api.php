<?php

use App\Http\Controllers\BodegaController;
use App\Http\Controllers\DispositivoController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ModeloController;
use App\Models\Bodega;
use App\Models\Marca;
use App\Models\Modelo;
use App\Models\Dispositivo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('bodega')->group(function () {
    Route::get('listar', [BodegaController::class, 'listar']);
});
Route::prefix('marca')->group(function () {
    Route::get('listar', [MarcaController::class, 'listar']);
});
Route::prefix('modelo')->group(function () {
    Route::get('listar', [ModeloController::class, 'listar']);
});
Route::prefix('dispositivo')->group(function () {
    Route::get('listar', [DispositivoController::class, 'listar']);
    Route::post('agregar', [DispositivoController::class, 'agregar']);
});
