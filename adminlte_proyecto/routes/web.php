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

//Rutas de Welcome
Route::get('/', [App\Http\Controllers\WelcomeController::class, 'view_welcome'])->name('welcome');

//Rutas para AboutUS
Route::get('/about', [App\Http\Controllers\AboutUSController::class, 'view_aboutus']);

//Rutas para el tarjeton
Route::get('tarjeton', [App\Http\Controllers\TarjetonController::class, 'view_design']);

//Autenticacion
Auth::routes();

//Home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//candidatos
Route::get('inscribirCandidatos/{id}', [App\Http\Controllers\CandidatoController::class, 'view_inscribirCandidato'])->name('inscribirCandidatos');

Route::post('inscribir', [App\Http\Controllers\CandidatoController::class, 'inscribirCandidatoEstudiante'])->name('CandidatoEstudiante');

Route::get('listaCandidatos', [App\Http\Controllers\CandidatoController::class, 'lista_candidatos'])->name('listaCandidatos');
//Estudiantes
Route::get('estudiante', [App\Http\Controllers\Estudiantes::class, 'view_Estudiante'])->name('estudiante');

Route::post('estudiante', [App\Http\Controllers\Estudiantes::class, 'guardar_estudiantes'])->name('guardar_estudiantes');

//Guardar Imagenes
Route::post('store{id}', [App\Http\Controllers\FileControllers::class, 'store_file'])->name('store_file');

//VotarEstudiante
Route::get('votar', [App\Http\Controllers\VotarControllers::class, 'view_votar'])->name('votar_estudiante');
Route::post('elecciones', [App\Http\Controllers\VotarControllers::class, 'validar'])->name('validar');
Route::post('Registrar_voto', [App\Http\Controllers\VotarControllers::class, 'registrar_voto'])->name('votico');

//Resultados
Route::get('resultados', [App\Http\Controllers\ResultadosControllers::class, 'Mostrar_resultados'])->name('resultados');

//Route::post('Personeria', [App\Http\Controllers\VotarControllers::class, 'registrar_voto_personero'])->name('personeria');

//Route::Post('votar', [App\Http\Controllers\VotarControllers::class, 'Validar'])->name('Registrar_Voto_Estudiante');

//Route::get('elecciones', [App\Http\Controllers\VotarControllers::class, 'view_elecciones'])->name('elecciones');

//Route::post('votar', [App\Http\Controllers\VotarControllers::class, 'registrar_voto'])->name('voto_estudiante');




