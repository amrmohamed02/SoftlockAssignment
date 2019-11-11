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

use App\Http\Controllers\ManageController;

Route::get('/', 'ManageController@Show');

Route::get('/home/{id}', 'ManageController@ShowStudent');

Route::post('/home/{id}', 'ManageController@ShowStudent');

Route::get('/insert', 'ManageController@Insert');

Route::post('/insert', 'ManageController@Insert');

Route::get('/pdf/{id}', 'ManageController@printPDF');