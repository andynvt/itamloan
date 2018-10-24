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

Route::get('thich/{id}',[
    'as' => 'addwl',
    'uses' => 'CustomerController@getAddWL'
]);

Route::get('bo-thich/{id}',[
    'as' => 'delwl',
    'uses' => 'CustomerController@getDelWL'
]);

Route::get('them-vao-gio/{id}',[
    'as' => 'addcart',
    'uses' => 'CustomerController@getAddCart'
]);

Route::post('them-vao',[
    'as' => 'addcartqty',
    'uses' => 'CustomerController@postAddCartQty'
]);

Route::get('xoa-sp/{id}',[
    'as' => 'delcart',
    'uses' => 'CustomerController@getDelCart'
]);

Route::post('sua-gio-hang',[
    'as' => 'updatecart',
    'uses' => 'CustomerController@getUpdateCart'
]);

Route::get('thanh-toan',[
    'as' => 'checkout',
    'uses' => 'CustomerController@getCheckOut'
]);

Route::post('gui-thanh-toan',[
    'as' => 'postcheckout',
    'uses' => 'CustomerController@postCheckout'
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

Route::get('dang-xuat',[
    'as' => 'logout',
    'uses' => 'CustomerController@postLogout'
]);

Route::post('tim-kiem',[
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

Route::get('xoa-danh-gia/{id}',[
    'as' => 'delfb',
    'uses' => 'CustomerController@postDelfb'
]);


Route::get('yeu-thich',[
    'as' => 'wishlist',
    'uses' => 'CustomerController@getWishlist'
]);
