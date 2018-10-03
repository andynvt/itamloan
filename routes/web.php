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

Route::get('/', function () {
    return view('welcome');
});

Route::get('index',[
    'as' => 'index',
    'uses' => 'CustomerController@getIndex'
]);

Route::get('loai',[
    'as' => 'loai',
    'uses' => 'CustomerController@getType'
]);

Route::get('chi-tiet',[
    'as' => 'single',
    'uses' => 'CustomerController@getSingle'
]);