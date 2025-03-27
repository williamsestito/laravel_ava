<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;

Route::apiResource('cursos', CursoController::class);
