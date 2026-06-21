<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AuthController;

Route::get('/',[UsersController::class, 'index'])->name('index');
Route::get('/index',[UsersController::class, 'create']);
Route::post('/store',[UsersController::class, 'store'])->name('liste');
Route::get('/login',[AuthController::class, 'index']);
Route::post('/login',[AuthController::class, 'login']);
Route::delete('/delete/{id}', [UsersController::class, 'destroy'])->name('delete');
Route::get('/edit/{id}', [UsersController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [UsersController::class, 'update'])->name('update');
