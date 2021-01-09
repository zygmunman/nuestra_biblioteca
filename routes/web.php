<?php

use App\Http\Controllers\PermisoController;
use App\Http\Controllers\InicioController;
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

/*
Route::get('/', function () {
    return view('welcome');
});
*/
/*
//Route::get('admin/sistema/permiso', [PermisoController::class, 'index'])->name('permiso');

//  Route::view('/permiso', 'permiso');

Route::get('permiso/{nombre}', function($nombre){
    return $nombre;
})->where('nombre', '[0-9]+')
 ->name('permiso');
*/

Route::get('/', [InicioController::class, 'index']);
