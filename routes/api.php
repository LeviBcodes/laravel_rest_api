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

//Api Routes
Route::apiResource([
    //Authors Routes
    'authors', App\Http\Controllers\AuthorController::class,
    //Books Routes
    'books', App\Http\Controllers\BookController::class
]);

