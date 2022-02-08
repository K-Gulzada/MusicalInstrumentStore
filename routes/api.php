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

Route::get('/getAllCategory', '\App\Http\Controllers\CategoryController@getAll');
Route::post('/createCategory', '\App\Http\Controllers\CategoryController@createModel');
Route::put('/updateCategory/{id}', '\App\Http\Controllers\CategoryController@updateModel');
Route::delete('/deleteCategoryById/{id}', '\App\Http\Controllers\CategoryController@deleteById');


Route::get('/getAllProduct', '\App\Http\Controllers\ProductController@getAll');
Route::post('/createProduct', '\App\Http\Controllers\ProductController@createModel');
Route::put('/updateProduct/{id}', '\App\Http\Controllers\ProductController@updateModel');
Route::delete('/deleteProductById/{id}', '\App\Http\Controllers\ProductController@deleteById');
