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

Route::get('/', 'PagesController@getIndex');
Route::get('/privacy', 'PagesController@getPp');
Route::get('/family', 'PagesController@getFamily');
Route::get('/contact-us', 'PagesController@getContact');
Route::get('/about-us', 'PagesController@getAbout');
Route::get('/services', 'PagesController@getServices');
