<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ApiController;

// Route::get('/user', function (Request $request) {
//      return $request->user();
// })->middleware('auth:sanctum');
Route::get('/liste',[ApiController::class, 'index']);
Route::delete('/delete/{id}', [ApiController::class, 'destroy']);
Route::put('/update/{id}', [ApiController::class, 'update']);
Route::post('/ajouter',[ApiController::class, 'store']);