<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController; 
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DocenteController;
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


Route::get('/', InicioController::class);

/*
Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');

Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');
*/

Route::resource('cursos', CursoController::class);

//Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');


/*
Route::controller(CursoController::class)->group(function(){
    Route::get('cursos', 'index');
    Route::get('cursos/create', 'create');
    Route::get('cursos/{curso}', 'show');
});
*/


Route::resource('docentes', DocenteController::class);