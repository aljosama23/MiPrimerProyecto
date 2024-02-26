<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;

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

Route::get('/', [AlumnoController::class, 'index'])->name('alumno.index');

Route::get('/alumnos/crear', [AlumnoController::class, 'create'])->name('alumno.create');

Route::post('/alumnos/guardar', [AlumnoController::class, 'store'])->name('alumno.store');

Route::get('/alumnos/editar/{codigo}',[AlumnoController::class, 'editar'])->name('alumno.editar');

Route::get('/alumnos/eliminar/{codigo}',[AlumnoController::class, 'eliminar'])->name('alumno.eliminar');

Route::put('/alumnos/actualizar/{id}', [AlumnoController::class, 'actualizar'] )->name('alumno.actualizar');

Route::get('/alumnos/destroy/{codigo}',[AlumnoController::class, 'destroy'])->name('alumno.destroy');



