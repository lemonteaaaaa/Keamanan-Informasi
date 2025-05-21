<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductApiController;

Route::middleware('client.auth')->group(function (){
    Route::get('/vehicles', [ProductApiController::class, 'index']);
    Route::post('/ vehicles', [ProductApiController::class, 'store']);
});