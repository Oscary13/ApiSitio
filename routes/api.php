<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiMonosController;
use App\Http\Controllers\ApiClasificacionController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/mono', [ApiMonosController::class, 'index'])->name('mostrarMono');

Route::get('/mono/{id}', [ApiMonosController::class, 'verMono'])->name('verMono');

Route::post('/mono', [ApiMonosController::class, 'guardarMono'])->name('guardarMono');

Route::delete('/mono/{id}', [ApiMonosController::class, 'eliminarMono'])->name('eliminarMono');

Route::post('/mono/{id}', [ApiMonosController::class, 'actualizarMono'])->name('actualizarMono');


Route::get('/clasificacion', [ApiClasificacionController::class, 'index'])->name('mostrarMono');

Route::get('/clasificacion/{id}', [ApiClasificacionController::class, 'verClasificacion'])->name('verClasificacion');

Route::post('/clasificacion', [ApiClasificacionController::class, 'guardarClasificacion'])->name('guardarClasificacion');

Route::delete('/clasificacion/{id}', [ApiClasificacionController::class, 'eliminarClasificacion'])->name('eliminarClasificacion');

Route::post('/clasificacion/{id}', [ApiClasificacionController::class, 'actualizarClasificacion'])->name('actualizarClasificacion');
