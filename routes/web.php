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
    return view('examenfinal');
});


Route::get('/pagina233', [\App\Http\Controllers\CatedraticoController::class,  'inicio'])->name('pagina2');
Route::get('/alumnos', [\App\Http\Controllers\AlumnoController::class,  'index'])->name('lista-alumnos');

Route::get('/pagina223', [\App\Http\Controllers\ExamenFinalController::class,  'inicio'])->name('examen_final_blanco');


Route::get('/', [\App\Http\Controllers\ExamenFinalController::class,  'examen_final_personal'])->name('Examen_final_connor');


Route::get('/examen_final_acevedo',[\App\Http\Controllers\SuzzanneController::class, 'index'])->name('suzzanne.index');



Route::get('/camiones',[\App\Http\Controllers\Catalogos\CamionController::class, 'index'])->name('camiones');
Route::post('/crear',[\App\Http\Controllers\Catalogos\CamionController::class, 'store'])->name('camion.create');
Route::post('/editar/{id}',[\App\Http\Controllers\Catalogos\CamionController::class, 'edit'])->name('camion.edit');
Route::get('/eliminar/{id}',[\App\Http\Controllers\Catalogos\CamionController::class, 'delete'])->name('camion.delete');

Route::get('/lista', [\App\Http\Controllers\Catalogos\CamionController::class, 'index' ])->name('ruta');
Route::get('/registrar', [\App\Http\Controllers\Catalogos\CamionController::class, 'register' ])->name('camion.register');
Route::get('/delete', [\App\Http\Controllers\Catalogos\CamionController::class, 'delete' ])->name('camion.delete');


Route::get('/examen_final_Melvin_Hernandez',[\App\Http\Controllers\MelvinHernandezController::class, 'index'])->name('MelvinHernandez');


Route::get('/index', [\App\Http\Controllers\ExamenFinalArango::class, 'index'])->name('examen.arangoview');



Route::get('/Hatziry',[\App\Http\Controllers\ExamenFinalHatziryChacon::class,'index'])->name('examen_final_Chacon');

Route::get('/examen_final_batz', [\App\Http\Controllers\ExamenFinalBatzController::class, 'index'])->name('examenbatz');

Route::get('/examen_final_Lima', [\App\Http\Controllers\AlumnoController::class,  'index'])->name('examenfinal');

