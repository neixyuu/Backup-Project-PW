<?php

use App\Http\Controllers\API\CarController;
use App\Http\Controllers\API\ManufactureController;
use App\Http\Controllers\TypeModelController;
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

//GET
Route::get('manufacture', [ManufactureController::class, 'index']);
Route::get('typemodel', [TypeModelController::class, 'index']);
Route::get('car', [CarController::class, 'index']);

//POST
Route::get('manufacture', [ManufactureController::class, 'store']);
Route::get('typemodel', [TypeModelController::class, 'store']);
Route::get('car', [CarController::class, 'store']);

//PATCH
Route::patch('manufacture/{id}', [ManufactureController::class, 'update']);
Route::patch('typemodel/{id}', [TypeModelController::class, 'update']);
Route::patch('car/{id}', [CarController::class, 'update']);

//DELETE
Route::patch('manufacture/{id}', [ManufactureController::class, 'destroy']);
Route::patch('typemodel/{id}', [TypeModelController::class, 'destroy']);
Route::patch('car/{id}', [CarController::class, 'destroy']);
