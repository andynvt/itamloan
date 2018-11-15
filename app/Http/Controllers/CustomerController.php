<?php

namespace App\Http\Controllers;

use App\Bill;
use App\BillDetail;
use App\Cart;
use App\Catalog;
use App\City;
use App\Customer;
use App\Feedback;
use App\Product;
use App\ProductColor;
use App\ProductImage;
use App\ProductType;
use App\Promotion;
use App\User;
use App\WL;
use Carbon\Carbon;
use Faker\Provider\Color;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use function PHPSTORM_META\elementType;

class CustomerController extends Controller
{
    public static function getGB($words){
        $words = explode(' ', $words);
        foreach($words as $word) {
            if(substr($word, -strlen('GB')) === 'GB') {
                return $word;
            }
        }
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

    public function getIndex(){
        $ls_type = ProductType::all();
        $ls_ip = Catalog::where('id_type',1)->take(8)->get();
        $ls_ipad = Catalog::where('id_type',2)->take(8)->get();
        $ls_mac = Catalog::where('id_type',3)->take(8)->get();
        $ls_watch = Catalog::where('id_type',4)->take(8)->get();

        $promo = Promotion::orderBy('end_date')->first();
        $date = array();
        for ($i=0; $i<6; $i++){
//            $date[$i] = $promo->end_date.format('Y');
        }

//        dd($date);
        return view('customer.page.home', compact('ls_type','ls_ip','ls_ipad','ls_mac','ls_watch','promo'));
    }

    public function getType($type){
        $tenloai = ProductType::where('id', $type)->get();
        $dsp = Catalog::where('id_type',$type)->pluck('catalog','id');

        $color = ProductColor::select('product_color.id','color')
            ->leftjoin('products as p','p.id','=','product_color.id_product')
            ->leftjoin('catalogs as ctl','ctl.id','=','p.id_catalog')
            ->where('id_type',$type)
            ->groupBy('color')->orderBy('product_color.id')->get();

        foreach ($color as $value){
            $value->colorid = str_replace(' ', '', $value->color);
        }
        $dl = array(16,32,64,128,256,512);

        $product = Product::leftjoin('catalogs as ctl','ctl.id','=','products.id_catalog')
            ->leftjoin('product_type as pt', 'pt.id','=','ctl.id_type')
            ->leftjoin('product_color as pc','pc.id_product','=','products.id')
            ->leftjoin('product_image as pi','pi.id_color','=','pc.id')
            ->leftjoin('promotions as promo','promo.id','=','products.id_promo')
            ->select('products.id','products.name','products.price', 'pi.image', 'promo.percent','pc.color','ctl.id as ctlid')
            ->where('pt.id',$type)
            ->groupBy('products.id')->paginate(12);
//            ->get();

        foreach ($product as $value){
            $value->colorid = str_replace(' ', '', $value->color);
            $value->dl = self::getGB($value->name);
        }

        $promo_product = Product::leftjoin('promotions as promo','promo.id','=','products.id_promo')
            ->leftjoin('product_color as pc','pc.id_product','=','products.id')
            ->leftjoin('product_image as pi','pi.id_color','=','pc.id')
            ->select('products.*','pi.image','promo.percent')
            ->groupBy('products.id')->orderBy('percent')
            ->where('id_promo','<>','null')->take(8)->get();

        return view('customer.page.ptype',compact('tenloai','dsp','color','dl','product','promo_product'));
    }

    public function getCatalog($catalog){
        $tenloai = Catalog::join('product_type as pt','pt.id','=','catalogs.id_type')
            ->select('pt.id as ptid','pt.type','catalogs.*')
            ->where('catalogs.id', $catalog)->get();

        $color = ProductColor::select('product_color.id','color')
            ->leftjoin('products as p','p.id','=','product_color.id_product')
            ->where('id_catalog',$catalog)
            ->groupBy('color')->orderBy('product_color.id')->get();
        foreach ($color as $value){
            $value->colorid = str_replace(' ', '', $value->color);
        }
        $dl = array(16,32,64,128,256,512);

        $product = Product::leftjoin('catalogs as ctl','ctl.id','=','products.id_catalog')
            ->leftjoin('product_type as pt', 'pt.id','=','ctl.id_type')
            ->leftjoin('product_color as pc','pc.id_product','=','products.id')
            ->leftjoin('product_image as pi','pi.id_color','=','pc.id')
            ->leftjoin('promotions as promo','promo.id','=','products.id_promo')
            ->select('products.id','products.name','products.price', 'pi.image', 'promo.percent','pc.color','ctl.id as ctlid')
            ->where('ctl.id',$catalog)
            ->groupBy('products.id')->paginate(12);
//            ->get();

        foreach ($product as $value){
            $value->colorid = str_replace(' ', '', $value->color);
            $value->dl = self::getGB($value->name);
        }

        $promo_product = Product::leftjoin('promotions as promo','promo.id','=','products.id_promo')
            ->leftjoin('product_color as pc','pc.id_product','=','products.id')
            ->leftjoin('product_image as pi','pi.id_color','=','pc.id')
            ->select('products.*','pi.image','promo.percent')
            ->groupBy('products.id')->orderBy('percent')
            ->where('id_promo','<>','null')->take(8)->get();

        return view('customer.page.catalog',compact('tenloai','dl','color','promo_product','product'));
    }

    public  function getSearch(Request $req){
        $key = $req->key;
        $ls_sp = ProductType::join('catalogs','catalogs.id_type','=','product_type.id')
            ->select('product_type.*','catalogs.id as ctlid','catalogs.catalog')
            ->get();
        $gr_lssp = $ls_sp->groupBy('type');
        $color = ProductColor::all()->unique('color');
        foreach ($color as $value){
            $value->colorid = str_replace(' ', '', $value->color);
        }
        $dl = array(16,32,64,128,256,512);


        $product = Product::leftjoin('catalogs as ctl','ctl.id','=','products.id_catalog')
            ->leftjoin('product_type as pt', 'pt.id','=','ctl.id_type')
            ->leftjoin('product_color as pc','pc.id_product','=','products.id')
            ->leftjoin('product_image as pi','pi.id_color','=','pc.id')
            ->leftjoin('promotions as promo','promo.id','=','products.id_promo')
            ->select('products.id','products.name','products.price', 'pi.image', 'promo.percent','pc.color','ctl.id as ctlid')
            ->where('products.name','like','%'.$key.'%')
            ->groupBy('products.id')->paginate(12);
//            ->get();
        foreach ($product as $value){
            $value->colorid = str_replace(' ', '', $value->color);
            $value->dl = self::getGB($value->name);
        }

        $promo_product = Product::leftjoin('promotions as promo','promo.id','=','products.id_promo')
            ->leftjoin('product_color as pc','pc.id_product','=','products.id')
            ->leftjoin('product_image as pi','pi.id_color','=','pc.id')
            ->select('products.*','pi.image','promo.percent')
            ->groupBy('products.id')->orderBy('percent')
            ->where('id_promo','<>','null')->take(8)->get();

        return view('customer.page.search',compact('ls_sp','gr_lssp','color','promo_product','product','key','dl'));
    }

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
            ->groupBy('products.id')->orderBy('percent')
            ->where('id_promo','<>','null')->take(8)->get();

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
            ->select('pc.id','id_product','pc.color','name')
            ->where('ctl.id',$id_catalog)
//            ->groupBy('color')
            ->get();
        foreach ($arr_color as $value){
            $value->dl = self::getGB($value->name);
        }
//        dd($arr_color);
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
            ->groupBy('products.id')->orderBy('percent')
            ->where('id_promo','<>','null')->take(8)->get();

        $img = Product::leftjoin('product_color as pc','pc.id_product','=','products.id')
            ->leftjoin('product_image as pi','pi.id_color','=','pc.id')
            ->where('products.id',$id)
            ->select('products.id','pi.image')
            ->get();

        $str_spec = ProductType::where('id',$id_type)->value('type_detail');
        $str_value = Product::where('id',$id)->value('specs');

        $spec = explode(',', $str_spec);
        $value_spec = explode(',', $str_value);
//        dd($spec);

        $no_of_fb = Feedback::where('id_product', $id)->count();
        $avg_of_fb = Feedback::where('id_product', $id)->avg('stars');
        $avg_fb = number_format((float)$avg_of_fb, 1, '.', '');

        $feedback = Feedback::leftjoin('customers as c','c.id','=','feedbacks.id_customer')
            ->where('id_product',$id)
            ->orderBy('stars','desc')
            ->select('feedbacks.*','c.avatar','c.c_name')->paginate(2);
//            ->get();
//dd($feedback);
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

        if(Auth::check()){
            $id = Auth::user()->id;
            $cus = Customer::join('users as u','u.id','=','customers.id_user')
                ->where('id_user',$id)->get();

//            dd($cus);
        }

        return view('customer.page.single', compact('pd', 'product_video', 'spec', 'value_spec',
            'promo_product', 'same_product', 'img', 'arr_color', 'arr_img','no_of_fb','avg_fb','feedback','fb_1','fb_2',
            'fb_3','fb_4','fb_5','cus'));
    }

    public function postFeedback(Request $req){
//        dd($req->ra)
        $id_customer = Customer::where('id_user',Auth::user()->id)->value('id');

        $fb = new Feedback();
        $fb->id_product = $req->id_product;
        $fb->id_customer = $id_customer;
        $fb->stars = $req->rating;
        $fb->review = $req->review;
        $fb->save();
        return redirect()->back()->with(['flag'=>'success','title'=>'Thông báo' ,'message'=>'Đánh giá sản phẩm thành công']);
    }

    public  function getAd(){
        $promo = Promotion::orderBy('end_date')->get();
        return view('customer.page.ad',compact('promo'));
    }

    public function getWishlist(){
        $promo_product = Product::leftjoin('promotions as promo','promo.id','=','products.id_promo')
            ->leftjoin('product_color as pc','pc.id_product','=','products.id')
            ->leftjoin('product_image as pi','pi.id_color','=','pc.id')
            ->select('products.*','pi.image','promo.percent')
            ->groupBy('products.id')->orderBy('percent')
            ->where('id_promo','<>','null')->take(8)->get();

        if (Session('wl')) {
            $oldwl = Session::get('wl');
            $wl = new WL($oldwl);
//            dd($wl);
            return view('customer.page.wishlist')->with([
                'cart' => Session::get('wl'),
                'product_cart' => $wl->items,
                'totalQty' => $wl->totalQty,
                'promo_product' => $promo_product,
            ]);
        }
        return view('customer.page.wishlist',compact('promo_product'));
    }

    public function getDelWL($id){
        $product = Product::find($id);
        $oldwl = Session::has('wl')?Session::get('wl'):null;
        $wl = new WL($oldwl);
//        dd($wl);
        $wl->removeItem($id);
        if(count($wl->items) > 0){
            Session::put('wl',$wl);
        }
        else{
            Session::forget('wl');
        }
        return redirect()->back()->with(['flag'=>'warning','title'=>'Thông báo' ,'message'=>'Xoá '.$product->name.' thành công!']);
    }

    public function getAddWL(Request $req, $id){
        $product = Product::find($id);
        $promo = Promotion::where('id',$product->id_promo)->get();
        $id_color = ProductColor::where('id_product',$product->id)->value('id');
        $color = ProductColor::where('id_product',$product->id)->value('color');
        $image = ProductImage::where('id_color',$id_color)->value('image');
        if($promo->count() == 0){
            $real_price = $product->price;
        }
        else{
            $real_price = $product->price - $product->price * $promo[0]->percent / 100;
        }

        $oldwl = Session('wl')?Session::get('wl'):null;
        $wl = new WL($oldwl);
        $wl->add($product, $id,$real_price, $color, $image);
        $req->session()->put('wl',$wl);
        return redirect()->back()->with(['flag'=>'info','title'=>'Thông báo' ,'message'=>'Đã thích '.$product->name]);

    }

    public  function getCart(){
        $promo_product = Product::leftjoin('promotions as promo','promo.id','=','products.id_promo')
            ->leftjoin('product_color as pc','pc.id_product','=','products.id')
            ->leftjoin('product_image as pi','pi.id_color','=','pc.id')
            ->select('products.*','pi.image','promo.percent')
            ->groupBy('products.id')->orderBy('percent')
            ->where('id_promo','<>','null')->take(8)->get();
        if (Session('cart')) {
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);

            $totalPriceFinal = $cart->totalPrice + $cart->tax;
            return view('customer.page.cart')->with([
                'cart' => Session::get('cart'),
                'product_cart' => $cart->items,
                'tax' => $cart->tax,
                'totalPriceFinal' => $totalPriceFinal,
                'totalQty' => $cart->totalQty,
                'promo_product' => $promo_product,
            ]);
        }
        return view('customer.page.cart',compact('promo_product'));

    }

    public function getAddCart(Request $req, $id){
        $product = Product::find($id);
        $promo = Promotion::where('id',$product->id_promo)->get();
        $id_color = ProductColor::where('id_product',$product->id)->value('id');
        $color = ProductColor::where('id_product',$product->id)->value('color');
        $image = ProductImage::where('id_color',$id_color)->value('image');


        if($promo->count() == 0){
            $real_price = $product->price;
        }
        else{
            $real_price = $product->price - $product->price * $promo[0]->percent / 100;
        }

        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id, $real_price, $color, $image);
//        dd($cart);
        $req->session()->put('cart',$cart);

        return redirect()->back()->with(['flag'=>'info','title'=>'Thông báo' ,'message'=>'Thêm '.$product->name.' vào giỏ hàng thành công!']);
    }

    public function postAddCartQty(Request $req){
        $id_product = $req->idsp;
        $id_color = ProductColor::where('id_product',$id_product)->value('id');
        $sl = $req->soluong;
        $product = Product::find($id_product);
        $promo = Promotion::where('id',$product->id_promo)->get();
        $color = ProductColor::where('id_product',$product->id)->value('color');
        $image = ProductImage::where('id_color',$id_color)->value('image');

        if($promo->count() == 0){
            $real_price = $product->price;
        }
        else{
            $real_price = $product->price - $product->price * $promo[0]->percent / 100;
        }
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->addCartQty($product, $id_product, $real_price, $sl, $color, $image);
//        dd($cart);
        $req->session()->put('cart',$cart);

        return redirect()->back()->with(['flag'=>'info','title'=>'Thông báo' ,'message'=>'Thêm '.$product->name.' vào giỏ hàng thành công!']);
    }

    public function getDelCart($id){
        $product = Product::find($id);
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
//        dd($cart);
        $cart->removeItem($id);
        if(count($cart->items) > 0){
            Session::put('cart',$cart);
        }
        else{
            Session::forget('cart');
        }
        return redirect()->back()->with(['flag'=>'warning','title'=>'Thông báo' ,'message'=>'Xoá '.$product->name.' thành công!']);
    }

    public function getUpdateCart(Request $req){
        $ids = $req->ids;
        $sls = $req->sls;
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $product = Product::find($ids);

        $cart->update($product, $ids, $sls);
        $req->session()->put('cart',$cart);

//        dd($cart);
        return redirect()->back()->with(['flag'=>'info','title'=>'Thông báo' ,'message'=>'Cập nhật giỏ hàng thành công!']);
    }

    public  function getCheckOut(){
        $promo_product = Product::leftjoin('promotions as promo','promo.id','=','products.id_promo')
            ->leftjoin('product_color as pc','pc.id_product','=','products.id')
            ->leftjoin('product_image as pi','pi.id_color','=','pc.id')
            ->select('products.*','pi.image','promo.percent')
            ->groupBy('products.id')->orderBy('percent')
            ->where('id_promo','<>','null')->take(8)->get();

        if (Session('cart')) {
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);

            $totalPriceFinal = $cart->totalPrice + $cart->tax;

            if(Auth::check()){
                $id = Auth::user()->id;
                $cus = Customer::join('users as u','u.id','=','customers.id_user')
                    ->where('id_user',$id)->get();
//            dd($cus);
                return view('customer.page.checkout')->with([
                    'cart' => Session::get('cart'),
                    'product_cart' => $cart->items,
                    'tax' => $cart->tax,
                    'totalPrice' => $cart->totalPrice,
                    'totalPriceFinal' => $totalPriceFinal,
                    'totalQty' => $cart->totalQty,
                    'promo_product' => $promo_product,
                    'cus' => $cus,
                ]);
            }
            return view('customer.page.checkout')->with([
                'cart' => Session::get('cart'),
                'product_cart' => $cart->items,
                'tax' => $cart->tax,
                'totalPrice' => $cart->totalPrice,
                'totalPriceFinal' => $totalPriceFinal,
                'totalQty' => $cart->totalQty,
                'promo_product' => $promo_product,
            ]);
        }
        return view('customer.page.checkout',compact('promo_product'));
    }

    public function postCheckout(Request $req)
    {
        $note = $req->note;
        if ($req->payment == 3) {
            $bill_status = 2;
        } else {
            $bill_status = 1;
        }
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);

        if (Auth::check()) {
            //thanh toán có đăng nhập
            $id = Auth::user()->id;
            $id_customer = Customer::where('id_user', $id)->value('id');
            $c = Customer::find($id_customer);

            $c->c_name = $req->name;
            $c->phone = $req->phone;
            $c->shipping_address = $req->address;
            $c->save();

            $b = new Bill();
            $b->id_customer = $id_customer;
            $b->id_status = $bill_status;
            $b->id_payment = $req->payment;
            $b->total_price = $cart->totalPrice;
            $b->total_product = $cart->totalQty;
            $b->note = $note;
            $b->tax = $cart->tax;
            $b->save();
            $email = Auth::user()->email;
        } else {
            //thanh toán chưa đăng nhập
            $u = new User();
            $u->email = $req->email;
            $u->password = Hash::make($req->password);
            $u->save();

            $c = new Customer();
            $c->id_user = $u->id;
            $c->c_name = $req->name;
            $c->phone = $req->phone;
            $c->shipping_address = $req->address . ' ,' . $req->town;
            $c->save();

            $b = new Bill();
            $b->id_customer = $c->id;
            $b->id_status = $bill_status;
            $b->id_payment = $req->payment;
            $b->total_price = $cart->totalPrice;
            $b->total_product = $cart->totalQty;
            $b->note = $note;
            $b->tax = $cart->tax;
            $b->save();
            $email = $u->email;

        }
        foreach ($cart->items as $i => $value) {
            //i: id  - value: từng item
            $bd = new BillDetail();
            $bd->id_bill = $b->id;
            $bd->id_product = $i;
            $bd->p_color = $value['color'];
            $bd->quantity = $value['qty'];
            $bd->save();

            $p = Product::find($i);
            $p->inventory -= $value['qty'];
        }

        $info = Bill::leftjoin('customers as c','c.id','=','bills.id_customer')
            ->leftjoin('users as u','u.id','=','c.id_user')
            ->leftjoin('bill_status as bs','bs.id','=','bills.id_status')
            ->leftjoin('payments as pm','pm.id','=','bills.id_payment')
            ->leftjoin('bill_detail as bd','bd.id_bill','=','bills.id')
            ->select('bills.*','payment','status','c_name','phone','address','shipping_address','email')
            ->where('bills.id',$b->id)->groupBy('bd.id_product')->first();

        $product = Product::leftjoin('promotions as promo','promo.id','=','products.id_promo')
            ->leftjoin('bill_detail as bd','bd.id_product','=','products.id')
            ->leftjoin('bills as b','b.id','=','bd.id_bill')
            ->select('name','quantity','percent','price')
            ->where('b.id',$b->id)->get();

        $data = ['bill' => $info, 'product' => $product, 'email' => $email];
        Mail::send('admin.mail.dadat',$data,function ($msg) use ($email){
            $msg->from('ngvantai.n8@gmail.com','itamloan.vn');
            $msg->to($email,'Khách hàng')->subject('🍎🍎 Đặt hàng thàng công ✅');
        });
        if (Mail::failures()) {}

        Session::forget('cart');
        return redirect()->route('index')->with(['flag' => 'success', 'title' => 'Thông báo', 'message' => 'Đặt hàng thành công']);
    }

    public  function getFaq(){
        return view('customer.page.faq');
    }

    public  function getLogin(){

        return view('customer.page.login',compact('city'));
    }

    public function postLogin(Request $req){
        if(Auth::attempt(['email' => $req->email,
            'password' => $req->password, 'role' => 'customer'])){
            if($req->page == "loginpage"){
                return redirect()->route('user')->with(['flag'=>'success','title'=>'Thông báo' ,'message'=>'Đăng nhập thành công']);
            }
            if($req->page == "checkoutpage"){
                return redirect()->back()->with(['flag'=>'success','title'=>'Thông báo' ,'message'=>'Đăng nhập thành công']);
            }
        }
        if (Auth::attempt(['email' => $req->email,
            'password' => $req->password, 'role' => 'admin'])) {
            return redirect()->route('adminthongke')->with(['flag'=>'success' ,'message'=>'Đăng nhập thành công']);
        }
        else{
            return redirect()->back()->with(['flag'=>'error','title'=>'Thông báo' ,'message'=>'Đăng nhập thất bại']);
        }
    }

    public function postFBReg(Request $req){
//        dd($req);
        $ckemail = User::where('email',$req->email)->first();
        if(!$ckemail){
            $user = new User();
            $user->email = $req->email;
            $user->id_social = $req->id;
            $user->social = 'fb';
            $user->role = 'customer';
            $user->save();

            $cus = new Customer();
            $cus->id_user = $user->id;
            $cus->c_name = $req->name;
            $cus->save();

            $email = $req->email;
            $name = $req->name;

            $data = ['name' => $name, 'email' => $email];
            Mail::send('admin.mail.dangky',$data,function ($msg) use ($email){
                $msg->from('ngvantai.n8@gmail.com','itamloan.vn');
                $msg->to($email,'Khách hàng')->subject('🍎🍎 Đăng ký tài khoản thành công ✅');
            });
            if (Mail::failures()) {}

            return redirect()->back()->with(['flag'=>'success','title'=>'Thông báo' ,'message'=>'Đăng ký thành công']);
        }
        else{
            return redirect()->back()->with(['flag'=>'danger','title'=>'Thông báo' ,'message'=>'Email đã tồn tại']);
        }
    }

    public function postGGReg(Request $req){
//        dd($req);
        $ckemail = User::where('email',$req->email)->first();
        if(!$ckemail){
            $user = new User();
            $user->email = $req->email;
            $user->id_social = $req->id;
            $user->social = 'gg';
            $user->role = 'customer';
            $user->save();

            $cus = new Customer();
            $cus->id_user = $user->id;
            $cus->c_name = $req->name;
            $cus->save();

            $email = $req->email;
            $name = $req->name;

            $data = ['name' => $name, 'email' => $email];
            Mail::send('admin.mail.dangky',$data,function ($msg) use ($email){
                $msg->from('ngvantai.n8@gmail.com','itamloan.vn');
                $msg->to($email,'Khách hàng')->subject('🍎🍎 Đăng ký tài khoản thành công ✅');
            });
            if (Mail::failures()) {}

            return redirect()->back()->with(['flag'=>'success','title'=>'Thông báo' ,'message'=>'Đăng ký thành công']);
        }
        else{
            return redirect()->back()->with(['flag'=>'danger','title'=>'Thông báo' ,'message'=>'Email đã tồn tại']);
        }
    }
    public function postFBLogin(Request $req){
//        dd($req);
       $ckid = User::where([['id_social',$req->id], ['social',$req->social]])->first();
       if($ckid){
           if(Auth::loginUsingId($ckid->id)){
               if($req->page == "loginpage"){
                   return redirect()->route('user')->with(['flag'=>'success','title'=>'Thông báo' ,'message'=>'Đăng nhập thành công']);
               }
               if($req->page == "checkoutpage"){
                   return redirect()->back()->with(['flag'=>'success','title'=>'Thông báo' ,'message'=>'Đăng nhập thành công']);
               }
           }
           else{
               return redirect()->back()->with(['flag'=>'error','title'=>'Thông báo' ,'message'=>'Đăng nhập thất bại']);
           }
       }
       else{
           return redirect()->back()->with(['flag'=>'error','title'=>'Thông báo' ,'message'=>'Tài khoản Facebook này chưa đăng ký']);
       }

    }
    public function postGGLogin(Request $req){
//        dd($req);
        $ckid = User::where([['id_social',$req->id], ['social',$req->social]])->first();
        if($ckid){
            if(Auth::loginUsingId($ckid->id)){
                if($req->page == "loginpage"){
                    return redirect()->route('user')->with(['flag'=>'success','title'=>'Thông báo' ,'message'=>'Đăng nhập thành công']);
                }
                if($req->page == "checkoutpage"){
                    return redirect()->back()->with(['flag'=>'success','title'=>'Thông báo' ,'message'=>'Đăng nhập thành công']);
                }
            }
            else{
                return redirect()->back()->with(['flag'=>'error','title'=>'Thông báo' ,'message'=>'Đăng nhập thất bại']);
            }
        }
        else{
            return redirect()->back()->with(['flag'=>'error','title'=>'Thông báo' ,'message'=>'Tài khoản Google này chưa đăng ký']);

        }

    }


    public  function postReg(Request $req){
        $ckemail = User::where('email',$req->email)->first();
        if(!$ckemail){
            $user = new User();
            $user->email = $req->email;
            $user->password = Hash::make($req->password);
            $user->save();

            $cus = new Customer();
            $cus->id_user = $user->id;
            $cus->c_name = $req->name;
            $cus->address = $req->address.', '.$req->town;
            $cus->shipping_address = $req->address.', '.$req->town;
            $cus->phone = $req->phone;
            $cus->save();

            $email = $req->email;
            $name = $req->name;

            $data = ['name' => $name, 'email' => $email];
            Mail::send('admin.mail.dangky',$data,function ($msg) use ($email){
                $msg->from('ngvantai.n8@gmail.com','itamloan.vn');
                $msg->to($email,'Khách hàng')->subject('🍎🍎 Đăng ký tài khoản thành công ✅');
            });
            if (Mail::failures()) {}

            return redirect()->back()->with(['flag'=>'success','title'=>'Thông báo' ,'message'=>'Đăng ký thành công']);
        }
        else{
            return redirect()->back()->with(['flag'=>'danger','title'=>'Thông báo' ,'message'=>'Email đã tồn tại']);
        }

    }

    public function postLogout(){
        Auth::logout();
        return redirect()->route('index')->with(['flag'=>'success','title'=>'Thông báo' ,'message'=>'Đăng xuất thành công']);
    }

    public  function getUser(){
        $id = Auth::user()->id;
        $id_customer = Customer::where('id_user',$id)->value('id');
        $cus = Customer::join('users as u','u.id','=','customers.id_user')
            ->where('id_user',$id)->get();
        $bill = Bill::leftjoin('customers as c','c.id','=','bills.id_customer')
            ->leftjoin('bill_status as bs','bs.id','=','bills.id_status')
            ->leftjoin('payments as p','p.id','=','bills.id_payment')
            ->select('bills.*','status','payment')
            ->where('c.id',$id_customer)->get();
        $fb = Feedback::leftjoin('customers as c','c.id','=','feedbacks.id_customer')
            ->leftjoin('products as p','p.id','=','feedbacks.id_product')
            ->leftjoin('product_color as pc','pc.id_product','=','p.id')
            ->leftjoin('product_image as pi','pi.id_color','=','pc.id')
            ->select('feedbacks.id','image','p.name','p.id as pid','stars','review')
            ->groupBy('feedbacks.id')
            ->where('c.id',$id_customer)->get();
//        dd($fb);
        return view('customer.page.user',compact('cus','bill','fb'));
    }

    public function postEditUser(Request $req){
        $id = Auth::user()->id;
        $id_customer = Customer::where('id_user',$id)->value('id');
        $cus = Customer::find($id_customer);
        $img = $req->avatar;

        if($req->hasfile('avatar')){
            $name=date('Y-m-d-H-i-s')."-".$img->getClientOriginalName();
            $img->move('storage/user', $name);

            Customer::where('id',$id_customer)->update([
                'c_name' => $req->name,
                'gender' => $req->gender,
                'dob' => $req->dob,
                'phone' => $req->phone,
                'address' => $req->address,
                'shipping_address' => $req->shipping_address,
                'avatar' => $name,
            ]);
        }
        else{
            Customer::where('id',$id_customer)->update([
                'c_name' => $req->name,
                'gender' => $req->gender,
                'dob' => $req->dob,
                'phone' => $req->phone,
                'address' => $req->address,
                'shipping_address' => $req->shipping_address,
            ]);
        }
        $cus->save();
        return redirect()->back()->with(['flag'=>'success','title'=>'Thông báo' ,'message'=>'Đổi thông tin thành công']);
    }

    public function postChangePass(Request $req){
        $id = Auth::user()->id;
        $realpass = Auth::user()->password;

        if(Hash::check($req->oldpass, $realpass)) {
            $u = User::find($id);
            $u->password = Hash::make($req->password);
            $u->save();

            $name = Customer::where('id_user',$id)->value('c_name');
            $email = Auth::user()->email;

            $data = ['name' => $name, 'email' => $email];
            Mail::send('admin.mail.doimk',$data,function ($msg) use ($email){
                $msg->from('ngvantai.n8@gmail.com','itamloan.vn');
                $msg->to($email,'Khách hàng')->subject('🍎🍎 Mật khẩu đã thay đổi ⛔');
            });
            if (Mail::failures()) {}
            return redirect()->back()->with(['flag'=>'success','title'=>'Thông báo' ,'message'=>'Đổi mật khẩu thành công']);
        }
        else{
            return redirect()->back()->with(['flag'=>'error','title'=>'Thông báo' ,'message'=>'Sai mật khẩu cũ']);
        }
    }

    public function postDelfb($id,Request $req){
        Feedback::find($id)->delete();
        return redirect()->back()->with(['flag'=>'success','title'=>'Thông báo' ,'message'=>'Xoá đánh giá thành công']);
    }
    public function forgetPass(){
        return view('customer.page.forgot_password');
    }

    public function postforgetPass(Request $req)
    {
        $email = $req->email;
        $user = User::where('email', $email)->first();
        $name = User::where('email', $email)
            ->leftjoin('customers as c', 'c.id_user', '=', 'users.id')
            ->value('c_name');
        if ($user) {
            $newpass = $this->randomPassword();
            $user->password = Hash::make($newpass);
            $user->save();

            $data = ['name' => $name, 'password' => $newpass, 'email' => $email];
            Mail::send('admin.mail.userreset', $data, function ($msg) use ($email) {
                $msg->from('ngvantai.n8@gmail.com', 'itamloan.vn');
                $msg->to($email, 'Khách hàng')->subject('🍎🍎 Khôi phục mật khẩu thành công ✅');
            });
            if (Mail::failures()) {}
            return redirect()->route('login')->with(['flag' => 'success', 'title' => 'Thông báo', 'message' => 'Đổi mật khẩu thành công. Mời bạn kiểm tra email để đăng nhập']);

        } else {
            return redirect()->back()->with(['flag' => 'danger', 'message' => 'Không tồn tại email này trên hệ thống']);
        }
    }
    public function randomPassword() {
        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }


}
