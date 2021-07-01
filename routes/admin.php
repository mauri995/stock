<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\HorariosMaquinasController;
use App\Http\Controllers\Admin\Ordenes\Construccion\ConstruccionController;
use Illuminate\Support\Facades\Route;

Route::get('', [HomeController::class,'index']);
Route::get('/ordenes/construccion/confeccionar',[ConstruccionController::class,'index'])->name('construccion.confeccionar');
Route::post('/admin/ordenes/construccion/confeccionar',[ConstruccionController::class,'piezas']);

Route::get('/horariosmaquinas',[HorariosMaquinasController::class,'index'])->name('horarios.maquinas');