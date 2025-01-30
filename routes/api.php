<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\CargoController;

Route::apiResource('users', UserController::class);
Route::get('departamentos', [DepartamentoController::class, 'index']);
Route::get('cargos', [CargoController::class, 'index']);