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
