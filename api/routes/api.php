<?php

use App\Http\Controllers\PerfilController;
use Illuminate\Support\Facades\Route;

Route::get('perfis', [PerfilController::class, 'index']);
Route::get('perfil/{id}', [PerfilController::class, 'show']);
Route::get('perfil', [PerfilController::class, 'showLast']);
