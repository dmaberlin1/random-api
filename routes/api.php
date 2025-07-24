<?php

use App\Http\Controllers\Api\RandomNumberController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('v1')->group(function () {
    Route::post('/generate', [RandomNumberController::class, 'generate']);
    Route::get('/retrieve/{id}', [RandomNumberController::class, 'retrieve']);
});
