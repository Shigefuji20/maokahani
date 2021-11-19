<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','SiteController@index');

Route::get('/venue', 'VenueController@index');
Route::post('/venue', 'VenueController@store');
Route::patch('/venue/{id}', 'VenueController@update');
Route::get('venue/create', 'VenueController@create');
Route::get('/venue/edit/{id}', 'VenueController@edit');
Route::delete('/venue', 'VenueController@delete');