<?php

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

/*Route::get('hello', function(){
    return 'Hello World!';
});

Route::get('hello-post/{name}', [App\Http\Controllers\HelloWorldController::class, 'hello']);*/

Route::get('bands/gender/{gender}', [App\Http\Controllers\BandController::class, 'getByGender']);
Route::post('bands/store', [App\Http\Controllers\BandController::class, 'store']);
Route::get('bands/{id}', [App\Http\Controllers\BandController::class, 'getById']);
Route::get('bands', [App\Http\Controllers\BandController::class, 'getAll']);




