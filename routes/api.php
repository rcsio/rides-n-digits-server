<?php

use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/tokens', function (LoginRequest $request) {
    $request->authenticate();
    $token = $request->user()->createToken('authToken');
    return ['token' => $token->plainTextToken];
});

Route::delete('/tokens', function (Request $request) {
    $request->user()->currentAccessToken()->delete();
})->middleware(['auth:sanctum']);
