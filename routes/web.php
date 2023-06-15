<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\SubjectsController;
use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\ScoreController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/asistencia',AsistenciaController::class);
Route::resource('/usuarios',UserController::class);
Route::resource('/instructor',InstructorController::class);
Route::resource('/apprentice',ApprenticeController::class);
Route::get('/vista_register_instructor', [InstructorController::class, 'redirigirAVista'])->name('redirigir.vista');
Route::get('/vista_register_materia', [SubjectsController::class, 'materiavista'])->name('redirigir.materiavista');
Route::get('/vista_register_apprentice', [ApprenticeController::class, 'redirigirAVista'])->name('redirigir.redirigirAVista');
Route::get('/vista_register_score', [ScoreController::class, 'redirigirAVistaScore'])->name('redirigir.redirigirAVistaScore');
Route::get('/vista_consulta_usuario', [ApprenticeController::class, 'consulta'])->name('redirigir.consulta');
