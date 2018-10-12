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

Route::get('loai/{type}',[
    'as' => 'loai',
    'uses' => 'CustomerController@getType'
]);

Route::get('dong/{catalog}',[
    'as' => 'catalog',
    'uses' => 'CustomerController@getCatalog'
]);

Route::get('chi-tiet/{id}',[
    'as' => 'single',
    'uses' => 'CustomerController@getSingle'
]);

Route::post('feedback',[
    'as' => 'postfeedback',
    'uses' => 'CustomerController@postFeedback'
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

Route::post('login',[
    'as' => 'postlogin',
    'uses' => 'CustomerController@postLogin'
]);

Route::post('dang-ky',[
    'as' => 'reg',
    'uses' => 'CustomerController@postReg'
]);

Route::post('dang-xuat',[
    'as' => 'logout',
    'uses' => 'CustomerController@postLogout'
]);

Route::get('tim-kiem',[
    'as' => 'search',
    'uses' => 'CustomerController@getSearch'
]);

Route::get('ca-nhan',[
    'as' => 'user',
    'uses' => 'CustomerController@getUser'
]);

Route::post('sua-thong-tin',[
    'as' => 'edituser',
    'uses' => 'CustomerController@postEditUser'
]);

Route::post('doi-mat-khau',[
    'as' => 'changpass',
    'uses' => 'CustomerController@postChangePass'
]);

Route::get('yeu-thich',[
    'as' => 'wishlist',
    'uses' => 'CustomerController@getWishlist'
]);
