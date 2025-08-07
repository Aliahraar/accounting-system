<?php

use Modules\User\Models\User;

use Illuminate\Support\Facades\Route;
use Modules\User\Http\Controllers\AuthController;
use Modules\User\Http\Controllers\UserController;


Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('users', UserController::class)->names('user');
});


 Route::post('/login', [AuthController::class, 'login']);

  Route::get('/check-user', function () {
    return response()->json(['userExists' => User::exists()]);
  });
