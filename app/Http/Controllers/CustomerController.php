<?php

namespace App\Http\Controllers;

use App\Catalog;
use App\Customer;
use App\Feedback;
use App\Product;
use App\ProductColor;
use App\ProductType;
use App\Promotion;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
            ->select('product_type.*','catalogs.id as ctlid','catalogs.catalog')
            ->get();
        $gr_lssp = $ls_sp->groupBy('type');

        $color = ProductColor::all()->unique('color');

        $product = Product::leftjoin('catalogs as ctl','ctl.id','=','products.id_catalog')
            ->leftjoin('product_type as pt', 'pt.id','=','ctl.id_type')
            ->leftjoin('product_color as pc','pc.id_product','=','products.id')
            ->leftjoin('product_image as pi','pi.id_color','=','pc.id')
            ->leftjoin('promotions as promo','promo.id','=','products.id_promo')
            ->select('products.id','products.name','products.price', 'pi.image', 'promo.percent')
            ->where('pt.id',$type)
            ->groupBy('products.id')
            ->get();

        $promo_product = Product::leftjoin('promotions as promo','promo.id','=','products.id_promo')
            ->leftjoin('product_color as pc','pc.id_product','=','products.id')
            ->leftjoin('product_image as pi','pi.id_color','=','pc.id')
            ->select('products.*','pi.image','promo.percent')
            ->where('id_promo','<>','null')->get();

        return view('customer.page.ptype',compact('tenloai','gr_lssp','color','product','promo_product'));
    }

    public function getCatalog($catalog){
        $tenloai = Catalog::join('product_type as pt','pt.id','=','catalogs.id_type')
            ->select('pt.id as ptid','pt.type','catalogs.*')
            ->where('catalogs.id', $catalog)->get();

        $ls_sp = ProductType::join('catalogs','catalogs.id_type','=','product_type.id')
            ->select('product_type.*','catalogs.id as ctlid','catalogs.catalog')
            ->get();
        $gr_lssp = $ls_sp->groupBy('type');

        $color = ProductColor::all()->unique('color');

        $product = Product::leftjoin('catalogs as ctl','ctl.id','=','products.id_catalog')
            ->leftjoin('product_type as pt', 'pt.id','=','ctl.id_type')
            ->leftjoin('product_color as pc','pc.id_product','=','products.id')
            ->leftjoin('product_image as pi','pi.id_color','=','pc.id')
            ->leftjoin('promotions as promo','promo.id','=','products.id_promo')
            ->select('products.id','products.name','products.price', 'pi.image', 'promo.percent')
            ->where('ctl.id',$catalog)
            ->groupBy('products.id')
            ->get();

        $promo_product = Product::leftjoin('promotions as promo','promo.id','=','products.id_promo')
            ->leftjoin('product_color as pc','pc.id_product','=','products.id')
            ->leftjoin('product_image as pi','pi.id_color','=','pc.id')
            ->select('products.*','pi.image','promo.percent')
            ->where('id_promo','<>','null')->get();
//dd($tenloai);

        return view('customer.page.catalog',compact('tenloai','gr_lssp','color','promo_product','product'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public  function getSingle($id){

        $pd = Product::leftjoin('catalogs as ctl','ctl.id','=','products.id_catalog')
            ->leftjoin('product_type as pt', 'pt.id', '=', 'ctl.id_type')
            ->leftjoin('promotions as promo','promo.id','=','products.id_promo')
            ->select('products.*', 'pt.id as ptid','pt.type','promo.percent','promo_name','promo_info')
            ->where('products.id',$id)
            ->get();

        $product_video = Product::leftjoin('product_video as pv','pv.id_product','=','products.id')
            ->select('v_name','v_link')
            ->where('products.id',$id)
            ->get();

        $promo_product = Product::leftjoin('promotions as promo','promo.id','=','products.id_promo')
            ->leftjoin('product_color as pc','pc.id_product','=','products.id')
            ->leftjoin('product_image as pi','pi.id_color','=','pc.id')
            ->select('products.*','pi.image','promo.percent','pc.id_product','pc.id as idcl')
            ->where('id_promo','<>','null')
            ->groupBy('products.id')
            ->get();

        $arr_id_type = Product::leftjoin('catalogs as ctl','ctl.id','=','products.id_catalog')
            ->leftjoin('product_type as pt', 'pt.id','=','ctl.id_type')
            ->select('pt.id')
            ->where('products.id',$id)
            ->get();

        $arr_id_catalog = Product::leftjoin('catalogs as ctl','ctl.id','=','products.id_catalog')
            ->select('ctl.id')
            ->where('products.id',$id)
            ->get();

        $id_type = $arr_id_type[0]->id;
        $id_catalog = $arr_id_catalog[0]->id;

        $arr_color = Product::leftjoin('catalogs as ctl','ctl.id','=','products.id_catalog')
            ->leftjoin('product_color as pc','pc.id_product','=','products.id')
            ->select('pc.id','pc.color')
            ->where('ctl.id',$id_catalog)
            ->get();

        $arr_img = Product::leftjoin('catalogs as ctl','ctl.id','=','products.id_catalog')
            ->leftjoin('product_color as pc','pc.id_product','=','products.id')
            ->leftjoin('product_image as pi','pi.id_color','=','pc.id')
            ->select('pi.id','pi.id_color','pi.image')
            ->where('products.id',$id)
            ->get();

        $same_product = Product::leftjoin('promotions as promo','promo.id','=','products.id_promo')
            ->leftjoin('product_color as pc','pc.id_product','=','products.id')
            ->leftjoin('product_image as pi','pi.id_color','=','pc.id')
            ->leftjoin('catalogs as ctl','ctl.id','=','products.id_catalog')
            ->leftjoin('product_type as pt', 'pt.id', '=', 'ctl.id_type')
            ->select('products.*','pi.image','promo.percent')
            ->where([
                ['pt.id',$id_type],
                ['products.id','<>',$id]
            ])
            ->groupBy('products.id')
            ->get();

        $img = Product::leftjoin('product_color as pc','pc.id_product','=','products.id')
            ->leftjoin('product_image as pi','pi.id_color','=','pc.id')
            ->where('products.id',$id)
            ->select('products.id','pi.image')
            ->get();

        $str_spec = ProductType::where('id',$id_type)->value('type_detail');
        $str_value = Product::where('id',$id)->value('specs');

        $spec = explode(',', $str_spec);
        $value = explode(',', $str_value);

        $no_of_fb = Feedback::where('id_product', $id)->count();
        $avg_of_fb = Feedback::where('id_product', $id)->avg('stars');
        $avg_fb = number_format((float)$avg_of_fb, 1, '.', '');

        $feedback = Feedback::leftjoin('customers as c','c.id','=','feedbacks.id_customer')
            ->where('id_product',$id)
            ->orderBy('stars','desc')
            ->get();

        $fb_5 = Feedback::where('id_product',$id)
            ->where('stars',5)
            ->count();
        $fb_4 = Feedback::where('id_product',$id)
            ->where('stars',4)
            ->count();
        $fb_3 = Feedback::where('id_product',$id)
            ->where('stars',3)
            ->count();
        $fb_2 = Feedback::where('id_product',$id)
            ->where('stars',2)
            ->count();
        $fb_1 = Feedback::where('id_product',$id)
            ->where('stars',1)
            ->count();

//        dd($feedback);

        return view('customer.page.single', compact('pd', 'product_video', 'spec', 'value',
            'promo_product', 'same_product', 'img', 'arr_color', 'arr_img','no_of_fb','avg_fb','feedback','fb_1','fb_2',
            'fb_3','fb_4','fb_5'));
    }
    public static function noToText($no){
        $text = "";
        if($no == 5){
            $text = "five";
        }else if($no == 4){
            $text = "four";
        }else if($no == 3){
            $text = "three";
        }else if($no == 2){
            $text = "two";
        }else if($no == 1){
            $text = "one";
        }
        return $text;
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

    public  function postReg(Request $req){
        $user = new User();
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
//        $user->save();

        $cus = new Customer();
        $cus->id_user = $user->id;
        $cus->c_name = $req->name;
        $cus->address = $req->town. ', '.$req->address;
        $cus->shipping_address = $req->town. ', '.$req->address;
        $cus->phone = $req->phone;
//        $cus->save();

        return redirect()->back()->with(['flag'=>'success','title'=>'Thành công' ,'message'=>'Đăng ký thành công']);
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
