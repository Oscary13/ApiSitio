<?php
use App\Http\Controllers\ApiController;
use App\Http\Controllers\MonitosController;
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

//  Route::get('/', function () {
//      return view('index');
//  })->name('aa');

 Route::get('/monos', [MonitosController::class, 'monos'])->name('monos');
 Route::get('/clasificacion', [MonitosController::class, 'clasificacion'])->name('clasificacion');
 Route::get('/', [MonitosController::class, 'monosinicio'])->name('monos2');

//  Route::get('/obb', function () {
//     return view('news');
// })->name('obb');

Route::get('/{id}', [ApiController::class, 'index'])->name('mostrar');






