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

Route::get('/', 'FrontController@index');
Route::get('login', 'FrontController@login');
Route::get('register', 'FrontController@registration');
Route::get('gkquestion', 'FrontController@gkquestion');
Route::get('statesgk', 'FrontController@statesgk');

Route::get('admin', 'AdminController@admin');
Route::get('deshboard', 'AdminController@deshboard');
Route::get('table', 'AdminController@table');
Route::get('subjects', 'AdminController@subjects');
Route::get('states', 'AdminController@states');
Route::get('currentgk', 'AdminController@currentgk');
Route::get('jobs', 'AdminController@jobs');
Route::get('onlinetests', 'AdminController@onlinetests');
Route::get('testcat', 'AdminController@testcat');
Route::get('post', 'AdminController@post');
Route::get('user', 'AdminController@user');
