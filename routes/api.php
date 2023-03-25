<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/greeting', function () {
    return new JsonResponse(['message' => 'hello world']);
});

Route::get('/hello', function () {
    return new JsonResponse(['message' => 'hello']);
});

Route::get(
    '/users',
    [UserController::class, 'index']
);

Route::get(
    '/users/{id}',
    [UserController::class, 'show']
);
