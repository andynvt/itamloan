<?php

namespace App\Http\Controllers;

use App\Catalog;
use App\Product;
use App\ProductType;
use App\Promotion;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public  function getIndex(){
        $ls_type = ProductType::all();
        $ls_ip = Catalog::where('id_type',1)->get();
        $ls_ipad = Catalog::where('id_type',2)->get();
        $ls_mac = Catalog::where('id_type',3)->get();
        $ls_watch = Catalog::where('id_type',4)->get();
//        dd($ls_type);
        return view('customer.page.home', compact('ls_type','ls_ip','ls_ipad','ls_mac','ls_watch'));
    }

    public  function getType($type){

        $tenloai = ProductType::where('id', $type)->get();
        $ls_sp = ProductType::join('catalogs','catalogs.id_type','=','product_type.id')
            ->get();
        dd($ls_sp);
//        $sp_theoloai = Product::where('id_type',$type)->get();

        return view('customer.page.type',compact('tenloai'));
    }

    public  function getSingle(){
        return view('customer.page.single');
    }

    public  function getAd(){
        return view('customer.page.ad');
    }

    public  function getCart(){
        return view('customer.page.cart');
    }

    public  function getCheckOut(){
        return view('customer.page.checkout');
    }

    public  function getConfirm(){
        return view('customer.page.confirm');
    }

    public  function getFaq(){
        return view('customer.page.faq');
    }

    public  function getLogin(){
        return view('customer.page.login');
    }

    public  function getSearch(){
        return view('customer.page.search');
    }

    public  function getUser(){
        return view('customer.page.user');
    }

    public  function getWishlist(){
        return view('customer.page.wishlist');
    }
}
