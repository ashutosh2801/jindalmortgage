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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/full-application/{token}','HomeController@FullApplication');
Route::get('/full-application','HomeController@FullApplication');
Route::get('/','HomeController@EazyApplication');
Route::get('/{token}','HomeController@EazyApplication');
Route::get('/eazy-application-form','HomeController@ApplyEazyForm');
Route::post('/eazy-application-form','HomeController@ApplyEazyForm');

Route::get('/full-application-form','HomeController@ApplyFullForm');
Route::post('/full-application-form','HomeController@ApplyFullForm');
