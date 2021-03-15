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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/items', 'Api\ItemController@getData')->name('api.items');
Route::get('/items/{id}', 'Api\ItemController@getDataById')->name('api.idItem');
Route::post('/items/store', 'Api\ItemController@store')->name('api.storeItem');
Route::put('/items/update/{id}', 'Api\ItemController@update')->name('api.editItem');
Route::delete('/items/delete/{id}', 'Api\ItemController@destroy')->name('api.deleteItem');