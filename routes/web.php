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

Route::get('khuyen-mai',[
    'as' => 'ad',
    'uses' => 'CustomerController@getAd'
]);

Route::get('gio-hang',[
    'as' => 'cart',
    'uses' => 'CustomerController@getCart'
]);

Route::get('thanh-toan',[
    'as' => 'checkout',
    'uses' => 'CustomerController@getCheckOut'
]);

Route::get('xac-nhan',[
    'as' => 'confirm',
    'uses' => 'CustomerController@getConfirm'
]);

Route::get('cau-hoi-thuong-gap',[
    'as' => 'faq',
    'uses' => 'CustomerController@getFaq'
]);

Route::get('dang-nhap',[
    'as' => 'login',
    'uses' => 'CustomerController@getLogin'
]);

Route::get('tim-kiem',[
    'as' => 'search',
    'uses' => 'CustomerController@getSearch'
]);

Route::get('ca-nhan',[
    'as' => 'user',
    'uses' => 'CustomerController@getUser'
]);

Route::get('yeu-thich',[
    'as' => 'wishlist',
    'uses' => 'CustomerController@getWishlist'
]);
