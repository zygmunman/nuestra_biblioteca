<?php

//use App\Http\Controllers\PermisoController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\Admin\RolController;
use App\Http\Controllers\Admin\MenuController;
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


/**
 * ¡¡¡¡NOTA MUY IMPORTANTE!!!!: HAY QUE IMPORTAR LA CLASE DEL CONTROLADOR EN LA PARTE DE ARRIBA
 */

Route::get('/', [InicioController::class, 'index']);

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
    /** RUTAS DE PERMISO */
    Route::get('permiso', [PermisoController::class, 'index'])->name('permiso');
    Route::get('permiso/crear', [PermisoController::class, 'crear'])->name('crear_permiso');

    /** RUTAS DEL MENÚ */
    Route::get('menu', [MenuController::class, 'index'])->name('menu');
    Route::get('menu/crear', [MenuController::class, 'crear'])->name('crear_menu');
    Route::post('menu', [MenuController::class, 'guardar'])->name('guardar_menu');
    Route::post('menu/guardar-orden', 'MenuController@guardarOrden')->name('guardar_orden');

    /** RUTAS DE ROL */
    Route::get('rol', [RolController::class, 'index'])->name('rol');
    Route::get('rol/crear', [RolController::class, 'crear'])->name('crear_rol');
    Route::post('rol', [RolController::class, 'guardar'])->name('guardar_rol');
    Route::get('rol/{id}/editar', [RolController::class, 'editar'])->name('editar_rol');
    Route::put('rol/{id}', [RolController::class, 'actualizar'])->name('actualizar_rol');
    Route::delete('rol/{id}', [RolController::class, 'eliminar'])->name('eliminar_rol');

});
