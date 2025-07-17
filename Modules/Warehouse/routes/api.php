<?php

use Illuminate\Support\Facades\Route;
use Modules\Warehouse\Http\Controllers\WarehouseController;

Route::middleware(['auth:sanctum'])->group(function () {

  Route::apiResource('warehouses', WarehouseController::class)->names('warehouse');


      Route::get('/test-data', function () {
      return response()->json([
        'status' => 'success',
        'message' => 'This is test data from API',
        'data' => [
            'id' => 1,
            'name' => 'Ali Awsat',
            'email' => 'ali@example.com',
            'roles' => ['admin', 'editor'],
        ],
    ]);
});

});



