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

Route::get('authors', [App\Http\Controllers\AuthorController::class, 'index']);
Route::post('authors', [App\Http\Controllers\AuthorController::class, 'store']);
Route::get('authors/{author}', [App\Http\Controllers\AuthorController::class, 'show']);
Route::put('authors/{author}', [App\Http\Controllers\AuthorController::class, 'update']);
Route::patch('authors/{author}', [App\Http\Controllers\AuthorController::class, 'update']);
Route::delete('authors/{author}', [App\Http\Controllers\AuthorController::class, 'destroy']);
Route::get('books', [App\Http\Controllers\BookController::class, 'index']);
Route::post('books', [App\Http\Controllers\BookController::class, 'store']);
Route::get('books/{book}', [App\Http\Controllers\BookController::class, 'show']);
Route::put('books/{book}', [App\Http\Controllers\BookController::class, 'update']);
Route::delete('books/{book}', [App\Http\Controllers\BookController::class, 'destroy']);

