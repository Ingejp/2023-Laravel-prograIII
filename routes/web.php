<?php

use Illuminate\Support\Facades\Route;

use app\Http\Controllers\AngelVargasCController;

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
    return view('Vargas/layout');
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

//Angel Vargas ruta
Route::get('/index', [\App\Http\Controllers\AngelVargasCController::class,  'index'])->name('alumno.index');
//Route::get('/index2', [\App\Http\Controllers\AngelVargasCController::class,  'index2'])->name('home');
