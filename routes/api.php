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

Route::group(['prefix' => '/category'], function () {
    Route::get('/', '\App\Http\Controllers\CategoryController@get');
    Route::post('/', '\App\Http\Controllers\CategoryController@create');
    Route::put('/{id}', '\App\Http\Controllers\CategoryController@update');
    Route::delete('/{id}', '\App\Http\Controllers\CategoryController@delete');
});

Route::group(['prefix' => '/product'], function () {
    Route::get('/', '\App\Http\Controllers\ProductController@get');
    Route::post('/', '\App\Http\Controllers\ProductController@create');
    Route::put('/{id}', '\App\Http\Controllers\ProductController@update');
    Route::delete('/{id}', '\App\Http\Controllers\ProductController@delete');
});

Route::group(['prefix' => '/booking'], function () {
    Route::get('/', '\App\Http\Controllers\BookingController@get');
    Route::post('/', '\App\Http\Controllers\BookingController@create');
    Route::put('/{id}', '\App\Http\Controllers\BookingController@update');
    Route::delete('/{id}', '\App\Http\Controllers\BookingController@delete');
});

Route::group(['prefix' => '/status'], function () {
    Route::get('/', '\App\Http\Controllers\StatusController@get');
    Route::post('/', '\App\Http\Controllers\StatusController@create');
    Route::delete('/{id}', '\App\Http\Controllers\StatusController@delete');
});

Route::group(['prefix' => '/delivery'], function () {
    Route::get('/', '\App\Http\Controllers\DeliveryController@get');
    Route::post('/', '\App\Http\Controllers\DeliveryController@create');
    Route::delete('/{id}', '\App\Http\Controllers\DeliveryController@delete');
});

Route::group(['prefix' => '/brand'], function () {
    Route::get('/', '\App\Http\Controllers\BrandController@get');
    Route::post('/', '\App\Http\Controllers\BrandController@create');
    Route::delete('/{id}', '\App\Http\Controllers\BrandController@delete');
});

Route::group(['prefix' => '/favorite'], function () {
    Route::get('/', '\App\Http\Controllers\FavoriteController@get');
    Route::post('/', '\App\Http\Controllers\FavoriteController@create');
    Route::delete('/{id}', '\App\Http\Controllers\FavoriteController@delete');
});

Route::group(['prefix' => '/discount'], function () {
    Route::get('/', '\App\Http\Controllers\DiscountController@get');
    Route::post('/', '\App\Http\Controllers\DiscountController@create');
    Route::delete('/{id}', '\App\Http\Controllers\DiscountController@delete');
});







