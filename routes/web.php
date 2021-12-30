<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', HomeController::class)->name('home');//muestra la pagina principal del sitio

/* Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index'); //con name() le damos un nombre identificativo a cada ruta

Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');

route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');

Route::get('cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');

Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');

Route::put('cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update');

Route::delete('cursos/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy'); */

 //mediante la siguiente linea de codigo, reemplazamos las 7 rutas anteriores del CRUD

Route::resource('cursos', CursoController::class);

//si deseariamos cambiar la URL por asignaturas, y no estar cambiando en cada archivo el nombre de ruta, usamos el 
//metodo names('cursos'), lo que le indiquemos dentro usara como nombre de ruta y no asignaturas, va a cambiar la URL por 
//asignaturas, pero no el nombre de rutas
//otra cosa a corregir es el nombre de variable, q se reemplaza por asignaturas, para ello usamos el metodo 
//parameters(['asignaturas'=>'curso']), que recibe un array, y le decimos que las variables lo cree con la palabra curso
//y no asignatura
//route::resource('asignaturas', CursoController::class)->parameters(['asignaturas'=>'curso'])->names('cursos');

route::view('nosotros','nosotros')->name('nosotros');//el metodo view lo usamos para mostrar contenidos estaticos