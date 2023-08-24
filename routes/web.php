<?php

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\PrestamoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[InicioController::class,'index'])->name('inicio.index');
Route::get('/index',[UsuarioController::class,'index'])->name('usuario.index');
Route::get('/create',[UsuarioController::class,'create'])->name('usuario.create');
Route::get('/edit/{id}',[UsuarioController::class,'edit'])->name('usuario.edit');
Route::get('/show/{id}',[UsuarioController::class,'show'])->name('usuario.show');
Route::post('/store',[UsuarioController::class,'store'])->name('usuario.store');
Route::put('/update/{id}',[UsuarioController::class,'update'])->name('usuario.update');
Route::delete('/destroy/{id}',[UsuarioController::class,'destroy'])->name('usuario.destroy');
Route::get('/libro/index',[LibroController::class,'index'])->name('libro.index');
Route::get('/libro/create',[LibroController::class,'create'])->name('libro.create');
Route::get('/libro/edit/{id}',[LibroController::class,'edit'])->name('libro.edit');
Route::get('/libro/show/{id}',[LibroController::class,'show'])->name('libro.show');
Route::post('/libro/store',[LibroController::class,'store'])->name('libro.store');
Route::put('/libro/update/{id}',[LibroController::class,'update'])->name('libro.update');
Route::delete('/libro/destroy/{id}',[LibroController::class,'destroy'])->name('libro.destroy');
Route::get('/prestamo/index',[PrestamoController::class,'index'])->name('prestamo.index');
Route::get('/prestamo/create',[PrestamoController::class,'create'])->name('prestamo.create');
Route::get('/prestamo/edit/{id}',[PrestamoController::class,'edit'])->name('prestamo.edit');
Route::get('/prestamo/show/{id}',[PrestamoController::class,'show'])->name('prestamo.show');
Route::post('/prestamo/store',[PrestamoController::class,'store'])->name('prestamo.store');
Route::put('/prestamo/update/{id}',[PrestamoController::class,'update'])->name('prestamo.update');
Route::delete('/prestamo/destroy/{id}',[PrestamoController::class,'destroy'])->name('prestamo.destroy');
