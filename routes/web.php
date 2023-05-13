<?php

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

Route::get('/', function () {
    return view('home');
});

Route::get('/pagina233', [\App\Http\Controllers\CatedraticoController::class,  'inicio'])->name('pagina2');
Route::get('/alumnos', [\App\Http\Controllers\AlumnoController::class,  'index'])->name('lista-alumnos');



Route::get('/camiones',[\App\Http\Controllers\Catalogos\CamionController::class, 'index'])->name('camiones');
Route::post('/crear',[\App\Http\Controllers\Catalogos\CamionController::class, 'store'])->name('camion.create');
Route::post('/editar/{id}',[\App\Http\Controllers\Catalogos\CamionController::class, 'edit'])->name('camion.edit');
Route::get('/eliminar/{id}',[\App\Http\Controllers\Catalogos\CamionController::class, 'delete'])->name('camion.delete');

Route::get('/lista', [\App\Http\Controllers\Catalogos\CamionController::class, 'index' ])->name('ruta');
Route::get('/registrar', [\App\Http\Controllers\Catalogos\CamionController::class, 'register' ])->name('camion.register');
Route::get('/delete', [\App\Http\Controllers\Catalogos\CamionController::class, 'delete' ])->name('camion.delete');
