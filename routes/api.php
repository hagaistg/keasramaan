<?php

use Illuminate\Http\Request;

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
Route::get('/asramas','AsramaController@index');
// Route::get('/asramas', "AsramaController@getAsramas");
// Route::post('/asramas',"AsramaController@addAsramas");
// Route::get('/asramas/{id}/edit','AsramaController@edit');
// Route::post('/asramas/{id}/update','AsramaController@update');
// Route::get('/asramas/{id}/delete','AsramaController@delete');

