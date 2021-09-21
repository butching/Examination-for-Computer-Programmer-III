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

Route::get('/', '\App\Http\Controllers\SiteController@index');
Route::get('/volunteer/delete/{id}', '\App\Http\Controllers\SiteController@delete');
Route::get('/volunteer/new', '\App\Http\Controllers\SiteController@new');
Route::get('/volunteer/edit/{id}', '\App\Http\Controllers\SiteController@edit');
Route::post('/volunteer/new', '\App\Http\Controllers\SiteController@create');
Route::post('/volunteer/edit/{id}', '\App\Http\Controllers\SiteController@update');
