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

Route::view('/', 'welcome');

Route::get('request1', 'RequestController@understandingTheRequest1');
Route::get('request2', 'RequestController@understandingTheRequest2');
Route::post('request2', 'RequestController@understandingTheRequest2Post');
Route::get('teste', 'RequestController@sendingDataToTheView');
