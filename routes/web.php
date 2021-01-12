<?php

//use App\Http\Controllers\PermisoController;

use App\Http\Controllers\Admin\MenuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\Admin\PermisoController;

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

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
    Route::get('permiso', [PermisoController::class, 'index'])->name('permiso');
    Route::get('permiso/crear', [PermisoController::class, 'crear'])->name('crear_permiso');

    Route::get('menu', [MenuController::class, 'index'])->name('menu');
    Route::get('menu/crear', [MenuController::class, 'crear'])->name('crear_menu');
    Route::post('menu', [MenuController::class, 'guardar'])->name('guardar_menu');

});
