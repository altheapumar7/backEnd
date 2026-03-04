<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

Route ::get('/token-test', function () {
    $user = \App\Models\User::first();
    return $user->createToken('test')->plainTextToken;
});
Route::post('/login', [AuthController::class, 'login']);