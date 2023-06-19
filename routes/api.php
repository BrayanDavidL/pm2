<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\SubjectsController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\ScoreController;
/*

|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//registro de asistencia
Route::post('/registrar_asistencia/{usuarioId}', [AsistenciaController::class, 'create'])->middleware('can: admin.registrar_asistencia')->name('registrar_asistencia');
//registro instructores a la tabla instructores
Route::post('/instructores_store', [InstructorController::class, 'create'])->middleware('can: admin.instructores_store')->name('instructores_store');
//filtro de asistencia
Route::get('/asistencia-filtro', [App\Http\Controllers\InstructorController::class,'filter'])->name('filter');
//Registro de maerias con el intructor asignado
Route::post('/materias_store', [App\Http\Controllers\SubjectsController::class, 'create'])->middleware('can: admin.materias_store')->name('materias_store');
//Regristro de aprendices en la tabla apprentice
Route::post('/apprentice_store', [App\Http\Controllers\ApprenticeController::class, 'create'])->middleware('can: admin.apprentice_store')->name('apprentice_store');
//Registro de notas por materia
Route::post('/scores_store', [App\Http\Controllers\ScoreController::class, 'store'])->middleware('can: admin.scores_store')->name('scores_store');
//filtrar notas por aprendiz
Route::get('/scores_search', [App\Http\Controllers\ScoreController::class, 'search'])->middleware('can: admin.scores_search')->name('scores_search');
//Descargar notas por aprendiz
Route::post('/scores_download_pdf', [App\Http\Controllers\ScoreController::class, 'pdf'])->name('scores_download_pdf');

