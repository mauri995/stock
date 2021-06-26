<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\HorariosMaquinasController;
use App\Http\Controllers\Admin\OrdenDeTrabajo\Construccion\ConfeccionarController;
use Illuminate\Support\Facades\Route;

Route::get('', [HomeController::class,'index']);
Route::get('/ordendetrabajo/construccion/confeccionar',[ConfeccionarController::class,'index'])->name('construccion.confeccionar');
Route::get('/horariosmaquinas',[HorariosMaquinasController::class,'index'])->name('horarios.maquinas');