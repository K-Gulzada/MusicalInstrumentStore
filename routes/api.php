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

Route::get('/getAllCategory', '\App\Http\Controllers\CategoryController@get');
Route::post('/createCategory', '\App\Http\Controllers\CategoryController@create');
Route::put('/updateCategory/{id}', '\App\Http\Controllers\CategoryController@update');
Route::delete('/deleteCategoryById/{id}', '\App\Http\Controllers\CategoryController@delete');

Route::get('/getAllProduct', '\App\Http\Controllers\ProductController@get');
Route::get('/getProductsByCategory/{productType}', '\App\Http\Controllers\ProductController@getByCategory');
Route::get('/getByProductName/{productName}', '\App\Http\Controllers\ProductController@getOne');
Route::post('/createProduct', '\App\Http\Controllers\ProductController@create');
Route::put('/updateProduct/{id}', '\App\Http\Controllers\ProductController@update');
Route::delete('/deleteProductById/{id}', '\App\Http\Controllers\ProductController@delete');
Route::get('/orderByPrice/{fromPrice}/{toPrice}', '\App\Http\Controllers\ProductController@filter');
Route::get('/filterByPrice/{fromPrice}/{toPrice}', '\App\Http\Controllers\ProductController@filterByPrice');

Route::get('/getAllBooking', '\App\Http\Controllers\BookingController@get');
Route::post('/createBooking', '\App\Http\Controllers\BookingController@create');
Route::put('/updateBooking/{id}', '\App\Http\Controllers\BookingController@update');
Route::delete('/deleteBookingById/{id}', '\App\Http\Controllers\BookingController@delete');

Route::get('/getAllStatus', '\App\Http\Controllers\StatusController@get');
Route::post('/createStatus', '\App\Http\Controllers\StatusController@create');
Route::delete('/deleteStatusById/{id}', '\App\Http\Controllers\StatusController@delete');


Route::get('/getAllDelivery', '\App\Http\Controllers\DeliveryController@get');
Route::post('/createDelivery', '\App\Http\Controllers\DeliveryController@create');
Route::delete('/deleteDeliveryById/{id}', '\App\Http\Controllers\DeliveryController@delete');



