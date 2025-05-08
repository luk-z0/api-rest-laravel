<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/users', [UserController::class, 'index'])->name('index');
Route::post('/user/create', [UserController::class, 'create'])->name('create');
Route::get('/user/{id}', [UserController::class, 'read'])->name('read');
Route::patch('/user/{id}', [UserController::class, 'update'])->name('update');
Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('destroy');
