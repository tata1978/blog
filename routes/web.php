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

Route::get('/', HomeController::class);

Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index'); //con name() le damos un nombre identificativo a cada ruta

Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');

route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');

Route::get('cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');

Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');

Route::put('cursos/{curso}' , [CursoController::class, 'update'])->name('cursos.update');

/* Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {

    if ($categoria) {
        return "Bienvenidos al curso $curso, de la categoria $categoria";
    } else {
        return "Bienvenidos al curso: $curso";
    }
}); */
