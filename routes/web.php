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
Route::get('/menu', [ 'uses'=>'pintoresController@menu', 'as' => 'inicio']);
Route::get('/inicio', [ 'uses'=>'pintoresController@inicio', 'as' => 'login']);
Route::get('/diegoRivera', [ 'uses'=>'pintoresController@diego', 'as' => 'diego']);
Route::get('/edvardMunch', [ 'uses'=>'pintoresController@munch', 'as' => 'munch']);
Route::get('/vanGogh', [ 'uses'=>'pintoresController@vanGogh', 'as' => 'vanGogh']);
Route::get('/daVinci', [ 'uses'=>'pintoresController@daVinci', 'as' => 'daVinci']);
Route::get('/toruKamei', [ 'uses'=>'pintoresController@toru', 'as' => 'toru']);

Route::post('/inicio', 'pintoresController@inicio');
Route::get('/', 'pintoresController@login');


