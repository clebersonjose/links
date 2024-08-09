<?php

use App\Http\Controllers\LinkController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\RedeController;
use Illuminate\Support\Facades\Route;

Route::get('perfis', [PerfilController::class, 'index']);
Route::get('perfil/{id}', [PerfilController::class, 'show']);
Route::get('perfil', [PerfilController::class, 'showLast']);

Route::get('redes', [RedeController::class, 'index']);

Route::get('links', [LinkController::class, 'index']);
