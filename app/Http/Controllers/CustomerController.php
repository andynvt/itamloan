<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductType;
use App\Promotion;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public  function getIndex(){
////        $today = new \DateTime('day');
//        $mytime = Carbon::now();
////        echo $mytime->toDateString();
////        dd($mytime);
//        $promo = Promotion::all();
////        dd($promo);
//        foreach ($promo as $p){
//            echo($p->end_date);
//        }
////        dd($today);
//        exit();

        $iphone = Product::where('id_type',1)->take(1)->get();
//        dd($iphone);
        return view('customer.page.home', compact('iphone'));
    }

    public  function getType($type){

        $tenloai = ProductType::where('id', $type)->get();
//        dd($tenloai);
        $sp_theoloai = Product::where('id_type',$type)->get();

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
