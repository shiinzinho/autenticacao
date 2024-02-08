<?php

use App\Http\Controllers\AdminController;
use App\Http\Middleware\IsAutenticated;
use App\Http\Middleware\SetSanctumGuard;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('create',[AdminController::class, 'store']);

Route::post('login',[AdminController::class, 'login']);

Route::get('admin/teste',[AdminController::class, 'verificarUsuarioLogado'])->middleware(['auth:sanctum', SetSanctumGuard::class, IsAutenticated::class]);