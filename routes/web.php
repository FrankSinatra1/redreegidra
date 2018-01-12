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

Route::get('/', "MainController@index");
Route::post('/contact', "MainController@addZ");
Route::get('/work', "WorkController@index");
Route::post('/pupel', "MainController@puples");
Route::get('/services/{id}', "ServicesController@index");
Route::get('/services/{id}/info', "ServicesController@indexPromo");
Route::post('/sendme', "MainController@sendme");
Route::post('/prices', "ServicesController@prices");
Route::post('/services/add', "ServicesController@prices");
Route::post('/services/promo/need', "ServicesController@promoneed");
Route::get('/work/get/{param}', "WorkController@getAllItems");