<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/login/{provider}', [AuthController::class, 'redirectToProvider']);
Route::get('/login/{provider}/callback', [AuthController::class, 'handleProviderCallback']);
