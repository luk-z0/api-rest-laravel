<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get('/users', [UserController::class, 'index'])->name('index');
Route::post('/user/create', [UserController::class, 'create'])->name('create');
Route::get('/user/{id}', [UserController::class, 'read'])->name('read');
Route::patch('/user/{id}', [UserController::class, 'update'])->name('update');
Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('destroy');
