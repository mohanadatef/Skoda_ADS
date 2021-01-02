<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','HomeController@index');
Route::get('/export_ADS_Skoda','HomeController@export');
Route::get('/thank','HomeController@thank');
Route::get('/thank1','HomeController@thank1');
Route::post('/store','HomeController@store');
Route::get('/upload_image','BackController@getimage');
Route::post('/storeimage','BackController@storeimage');
Route::auth();


