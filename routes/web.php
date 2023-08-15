<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnosController;


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


	// Rutas  para Encuesta Alumnos
Route::get('damc/alumno/create', [AlumnosController::class,'create'])->name('create');
Route::post('damc/alumno/store', [AlumnosController::class,'store'])->name('store');
Route::get('municipios/{id}', [AlumnosController::class,'store'])->name('store');

Route::get('municipios/{id}',[AlumnosController::class,'getMunicipios']);

