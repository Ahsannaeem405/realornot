<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::any('login',[\App\Http\Controllers\ApiController::class,'login']);
Route::any('register',[\App\Http\Controllers\ApiController::class,'register']);

Route::any('brand',[\App\Http\Controllers\ApiController::class,'brand']);

Route::any('image_save',[\App\Http\Controllers\ApiController::class,'image_save']);

Route::any('product_save',[\App\Http\Controllers\ApiController::class,'product_save']);


