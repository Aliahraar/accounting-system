<?php

use Illuminate\Support\Facades\Route;

use Modules\User\Http\Controllers\UserController;
use Modules\User\Http\Controllers\AuthController;


Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('users', UserController::class)->names('user');
});


 Route::post('/login', [AuthController::class, 'login']);


