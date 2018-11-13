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

//Route::get('/', function () {
//    return view('welcome');
//});

// Customer Page

Route::get('/',[
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

Route::post('postlogin',[
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


//Admin CP

Route::group(['prefix' => 'admin', 'middleware' => 'AdminLoginMiddleWare'], function () {
    Route::get('thong-ke',[
        'as' => 'adminthongke',
        'uses' => 'AdminController@AdminThongke'
    ]);

    Route::get('khuyen-mai',[
        'as' => 'adminkhuyenmai',
        'uses' => 'AdminController@AdminKhuyenMai'
    ]);

    Route::post('them-khuyen-mai',[
        'as' => 'themkm',
        'uses' => 'AdminController@ThemKM'
    ]);

    Route::post('sua-khuyen-mai/{id}',[
        'as' => 'suakm',
        'uses' => 'AdminController@SuaKM'
    ]);

    Route::post('sua-spkm/{id_promo}',[
        'as' => 'suaspkm',
        'uses' => 'AdminController@SuaSPKM'
    ]);

    Route::get('xoaspkm',[
        'as' => 'xoaspkm',
        'uses' => 'AdminController@XoaSPKM'
    ]);

    Route::get('xoakm',[
        'as' => 'xoakm',
        'uses' => 'AdminController@XoaKM'
    ]);

    Route::get('loai-san-pham',[
        'as' => 'adminlsp',
        'uses' => 'AdminController@AdminLSP'
    ]);

    Route::post('them-loai',[
        'as' => 'themloai',
        'uses' => 'AdminController@ThemLoai'
    ]);

    Route::post('sua-loai/{id}',[
        'as' => 'sualoai',
        'uses' => 'AdminController@SuaLoai'
    ]);

    Route::get('xoaloai',[
        'as' => 'xoaloai',
        'uses' => 'AdminController@XoaLoai'
    ]);

//    Route::post('xoaloai', 'AdminController@AjaxXoaLoai');

    Route::get('dong-san-pham',[
        'as' => 'admindsp',
        'uses' => 'AdminController@AdminDSP'
    ]);

    Route::post('them-dong',[
        'as' => 'themdong',
        'uses' => 'AdminController@ThemDong'
    ]);

    Route::post('sua-dong/{id}',[
        'as' => 'suadong',
        'uses' => 'AdminController@SuaDong'
    ]);

    Route::get('xoadong',[
        'as' => 'xoadong',
        'uses' => 'AdminController@XoaDong'
    ]);

    Route::get('san-pham',[
        'as' => 'adminsp',
        'uses' => 'AdminController@AdminSP'
    ]);

    Route::get('loadcatalog','AdminController@LoadCatalog');
    Route::get('loadspec','AdminController@LoadSpec');
    Route::get('loadvid','AdminController@LoadVid');
    Route::get('loadimg','AdminController@LoadImg');

    Route::get('loadcatalogedit','AdminController@LoadCatalogEdit');
    Route::get('delimg','AdminController@DelImg');

    Route::post('them-san-pham',[
        'as' => 'themsp',
        'uses' => 'AdminController@ThemSP'
    ]);

    Route::post('sua-san-pham/{id}',[
        'as' => 'suasp',
        'uses' => 'AdminController@SuaSP'
    ]);

    Route::get('xoasp',[
        'as' => 'xoasp',
        'uses' => 'AdminController@XoaSP'
    ]);

    Route::get('don-hang',[
        'as' => 'admindonhang',
        'uses' => 'AdminController@AdminDonHang'
    ]);

    Route::get('loadkh','AdminController@LoadKH');

    Route::get('checkbill','AdminController@CheckBill');
    Route::get('huydon','AdminController@HuyDon');

    Route::get('dagui',[
        'as' => 'dagui',
        'uses' => 'AdminController@DaGui'
    ]);

    Route::get('khach-hang',[
        'as' => 'adminkhachhang',
        'uses' => 'AdminController@AdminKhachHang'
    ]);

    Route::get('loadbill','AdminController@LoadBill');

    Route::get('danh-gia',[
        'as' => 'admindanhgia',
        'uses' => 'AdminController@AdminDanhGia'
    ]);
});



//Confirm Admin Login
Route::post('dang-nhap-admin',[
    'as' => 'postadminlogin',
    'uses' => 'AdminLogin@login'
]);
Route::get('admin/dang-nhap',[
    'as' =>'adminlogin',
    'uses' => 'AdminLogin@showLoginForm'
]);
Route::get('admin',[
    'as' =>'redirectadmin',
    'uses' => 'AdminLogin@redirectAdmin'
]);
Route::get('quen-mat-khau',[
    'as' => 'quenmk',
    'uses' => 'AdminLogin@quenMK'
]);
Route::post('dat-mk',[
    'as' => 'postquenmk',
    'uses' => 'AdminLogin@postQuenMK'
]);


