<?php

namespace App\Http\Controllers;

use App\Catalog;
use App\Product;
use App\ProductColor;
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
        $gr_lssp = $ls_sp->groupBy('id_type');

        $color = ProductColor::all()->unique('color');

        $product = Product::leftjoin('catalogs as ctl','ctl.id','=','products.id_catalog')
            ->leftjoin('product_type as pt', 'pt.id','=','ctl.id_type')
            ->leftjoin('product_color as pc','pc.id_product','=','products.id')
            ->leftjoin('product_image as pi','pi.id_color','=','pc.id')
            ->leftjoin('promotions as promo','promo.id','=','products.id_promo')
            ->select('products.id','products.name','products.price', 'pi.image', 'promo.percent')
            ->where('pt.id',$type)
            ->get();

//        dd($product);

//        $sp_theoloai = Product::where('id_type',$type)->get();

        return view('customer.page.type',compact('tenloai','gr_lssp','color','product'));
    }

    public  function getSingle($id){
        $s_product = Product::where('id','=',$id)->get();
        dd($s_product);
        return view('customer.page.single',compact('s_product'));
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
