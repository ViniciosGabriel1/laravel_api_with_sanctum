<?php

use App\Http\Controllers\ClientController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/status', function(){
    return response()->json(
        [

        'status' => 'ok',
        'message' => 'API está rodando'

    ],
    200
    );
});

Route::apiResource('clients', ClientController::class);
