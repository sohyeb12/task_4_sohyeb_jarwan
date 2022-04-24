<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;



Route::get('/', [TaskController::class, 'index']);
Route::post('/store', [TaskController::class, 'store']);
Route::post('/delete/{id}', [TaskController::class, 'delete']);

Route::post('/edit/{id}', [TaskController::class, 'edit']);
Route::post('/update/{id}', [TaskController::class, 'update']);
