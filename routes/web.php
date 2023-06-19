<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\SubjectsController;
use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\HorarioController;
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
Route::resource('/asistencia',AsistenciaController::class)->middleware('can: profe.asistencia');
Route::resource('/instructor',InstructorController::class)->middleware('can: admin.instructor');
Route::resource('/apprentice',ApprenticeController::class)->middleware('can: admin.apprentice');
Route::get('/vista_register_instructor', [InstructorController::class, 'redirigirAVista'])->middleware('can: admin.vista_register_instructor')->name('vista_register_instructor');
Route::get('/vista_register_materia', [SubjectsController::class, 'materiavista'])->middleware('can: admin.vista_register_materia')->name('vista_register_materia');
Route::get('/vista_register_apprentice', [ApprenticeController::class, 'redirigirAVista'])->middleware('can: admin.vista_register_apprentice')->name('vista_register_apprentice');
Route::get('/vista_register_score', [ScoreController::class, 'redirigirAVistaScore'])->middleware('can: profe.vista_register_score')->name('vista_register_score');
Route::get('/vista_consulta_usuario', [ApprenticeController::class, 'consulta'])->middleware('can: profe.vista_consulta_usuario')->name('vista_consulta_usuario');

Route::get('/usuarios', [UserController::class, 'index'])->middleware('can: admin.usuarios.index')->name('usuarios.index');
Route::post('/usuarios', [UserController::class, 'store'])->middleware('can: admin.usuarios.store')->name('usuarios.store');
Route::get('/usuarios/create', [UserController::class, 'create'])->middleware('can: admin.usuarios.create')->name('usuarios.create');
Route::get('/usuarios/{id}', [UserController::class, 'show'])->middleware('can: admin.usuarios.show')->name('usuarios.show');
Route::get('/usuarios/{id}/edit', [UserController::class, 'edit'])->middleware('can: admin.usuarios.edit')->name('usuarios.edit');
Route::put('/usuarios/{id}', [UserController::class, 'update'])->middleware('can: admin.usuarios.update')->name('usuarios.update');
Route::delete('/usuarios/{id}', [UserController::class, 'destroy'])->middleware('can: admin.usuarios.destroy')->name('usuarios.destroy');

Route::get('/horario', [App\Http\Controllers\HorarioController::class, 'index']);
