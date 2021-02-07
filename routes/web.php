<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\Admin\RolController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MenuRolController;
use App\Http\Controllers\Admin\PermisoController;
use App\Http\Controllers\Seguridad\LoginController;

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
 * ¡¡¡¡NOTA MUY IMPORTANTE!!!!: HAY QUE IMPORTAR SIEMPRE LA CLASE DEL CONTROLADOR
 */
/** RUTAS DE SEGURIDAD Y LOGIN */
Route::get('/', [InicioController::class, 'index'])->name('inicio');
Route::get('seguridad/login', [LoginController::class, 'index'])->name('login');
Route::post('seguridad/login', [LoginController::class, 'login'])->name('login_post');
Route::get('seguridad/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'superadmin']], function () {
    Route::get('', [AdminController::class, 'index']);
    /** RUTAS DE PERMISO */
    Route::get('permiso', [PermisoController::class, 'index'])->name('permiso');
    Route::get('permiso/crear', [PermisoController::class, 'crear'])->name('crear_permiso');
    Route::post('permiso', [PermisoController::class, 'guardar'])->name('guardar_permiso');
    Route::get('permiso/{id}/editar', [PermisoController::class, 'editar'])->name('editar_permiso');
    Route::put('permiso/{id}', [PermisoController::class, 'actualizar'])->name('actualizar_permiso');
    Route::delete('permiso/{id}', [PermisoController::class, 'eliminar'])->name('eliminar_permiso');

    /** RUTAS DEL MENÚ */
    Route::get('menu', [MenuController::class, 'index'])->name('menu');
    Route::get('menu/crear', [MenuController::class, 'crear'])->name('crear_menu');
    Route::post('menu', [MenuController::class, 'guardar'])->name('guardar_menu');
    Route::get('menu/{id}/editar',  [MenuController::class, 'editar'])->name('editar_menu');
    Route::put('menu/{id}', [MenuController::class, 'actualizar'])->name('actualizar_menu');
    Route::get('menu/{id}/eliminar', [MenuController::class, 'eliminar'])->name('eliminar_menu');
    Route::post('menu/guardar-orden', [MenuController::class, 'guardarOrden'])->name('guardar_orden');

    /** RUTAS DE ROL */
    Route::get('rol', [RolController::class, 'index'])->name('rol');
    Route::get('rol/crear', [RolController::class, 'crear'])->name('crear_rol');
    Route::post('rol', [RolController::class, 'guardar'])->name('guardar_rol');
    Route::get('rol/{id}/editar', [RolController::class, 'editar'])->name('editar_rol');
    Route::put('rol/{id}', [RolController::class, 'actualizar'])->name('actualizar_rol');
    Route::delete('rol/{id}', [RolController::class, 'eliminar'])->name('eliminar_rol');

    /** RUTAS DE MENU-ROL */
    Route::get('menu-rol', [MenuRolController::class, 'index'])->name('menu_rol');
    Route::post('menu-rol', [MenuRolController::class, 'guardar'])->name('guardar_menu_rol');

});
