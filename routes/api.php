<?php

use App\Http\Controllers\DoctoresApiController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/doctores', [DoctoresApiController::class, 'index']);
Route::get('/doctores/{id}', [DoctoresApiController::class, 'show']);
Route::put('/doctores/{id}', [DoctoresApiController::class, 'update']);
Route::post('/doctores', [DoctoresApiController::class,'store']);
Route::delete('/doctores/{id}', [DoctoresApiController::class,'destroy']);

