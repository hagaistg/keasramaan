<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/asramas','AsramaController@index');
Route::post('/asramas/create','AsramaController@create');
Route::get('/asramas/{id}/edit','AsramaController@edit');
Route::post('/asramas/{id}/update','AsramaController@update');
Route::get('/asramas/{id}/delete','AsramaController@delete');

// Route::get('/asramas','AsramaController@getAsrama');
// Route::post('/asramas/create','AsramaController@addAsrama');
// Route::get('/asramas/{id}/edit','AsramaController@edit');
// Route::post('/asramas/{id}/update','AsramaController@update');
// Route::get('/asramas/{id}/delete','AsramaController@delete');

Route::get('/mahasiswas','MahasiswaController@index');
// Route::get('/mahasiswas','MahasiswaController@getAsramas');
// Route::post('/mahasiswas/create','MahasiswaController@addAsramas');
// Route::get('/mahasiswas','MahasiswaController@index');
// Route::post('/mahasiswas/create','MahasiswaController@create');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
