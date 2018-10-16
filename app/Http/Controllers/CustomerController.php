<?php

namespace App\Http\Controllers;

use App\Bill;
use App\BillDetail;
use App\Cart;
use App\Catalog;
use App\Customer;
use App\Feedback;
use App\Product;
use App\ProductColor;
use App\ProductImage;
use App\ProductType;
use App\Promotion;
use App\User;
use Carbon\Carbon;
use Faker\Provider\Color;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use function PHPSTORM_META\elementType;

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
            ->select('feedbacks.*','c.avatar','c.c_name')
            ->get();
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

        return view('customer.page.single', compact('pd', 'product_video', 'spec', 'value',
            'promo_product', 'same_product', 'img', 'arr_color', 'arr_img','no_of_fb','avg_fb','feedback','fb_1','fb_2',
            'fb_3','fb_4','fb_5','cus'));
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

    public function postFeedback(Request $req){
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
        return view('customer.page.ad');
    }

    public  function getCart(){
        $promo_product = Product::leftjoin('promotions as promo','promo.id','=','products.id_promo')
            ->leftjoin('product_color as pc','pc.id_product','=','products.id')
            ->leftjoin('product_image as pi','pi.id_color','=','pc.id')
            ->select('products.*','pi.image','promo.percent')
            ->where('id_promo','<>','null')->get();
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

        return redirect()->back()->with(['flag'=>'success','title'=>'Thông báo' ,'message'=>'Thêm '.$product->name.' vào giỏ hàng thành công!']);
    }

    public function postAddCartQty(Request $req){
        $id_color = $req->color;
        $sl = $req->soluong;
        $id_product = ProductColor::where('id',$id_color)->value('id_product');
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

        return redirect()->back()->with(['flag'=>'success','title'=>'Thông báo' ,'message'=>'Thêm '.$product->name.' vào giỏ hàng thành công!']);
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
        return redirect()->back()->with(['flag'=>'success','title'=>'Thông báo' ,'message'=>'Xoá '.$product->name.' thành công!']);
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
        return redirect()->back()->with(['flag'=>'success','title'=>'Thông báo' ,'message'=>'Cập nhật giỏ hàng thành công!']);
    }

    public  function getCheckOut(){
        $promo_product = Product::leftjoin('promotions as promo','promo.id','=','products.id_promo')
            ->leftjoin('product_color as pc','pc.id_product','=','products.id')
            ->leftjoin('product_image as pi','pi.id_color','=','pc.id')
            ->select('products.*','pi.image','promo.percent')
            ->where('id_promo','<>','null')->get();

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

    public function postCheckout(Request $req){
        $note = $req->note;
        if($req->payment == 3){
            $bill_status = 2;
        }else{
            $bill_status = 1;
        }
        if(Auth::check()) {
//            $id = Auth::user()->id;
//            $id_customer = Customer::where('id_user',$id)->value('id');
//            $c = Customer::find($id_customer);
//
//            $c->c_name = $req->name;
//            $c->phone = $req->phone;
//            $c->shipping_address = $req->address;
//            $c->save();
//
//            $oldCart = Session::has('cart')?Session::get('cart'):null;
//            $cart = new Cart($oldCart);
//
////            dd($cart);
//
//            $b = new Bill();
//            $b->id_customer = $id_customer;
//            $b->id_status = $bill_status;
//            $b->id_payment =$req->payment;
//            $b->total_price = $cart->totalPrice;
//            $b->total_product = $cart->totalQty;
//            $b->note = $req->note;
//            $b->tax = $cart->tax;
////            $b->save();
//            foreach ($cart->items as $i => $value){
//                //i: id  - value: từng item
//                $bd = new BillDetail();
//                $bd->id_bill = $b->id;
//                $bd->id_product = $i;
////                dd()
//                $bd->p_color = $value['color'];
//                $bd->quantity = $value['qty'];
//                $bd->save();
//            }
//            $cart->forget
            return redirect()->route('confirm')->with(['flag'=>'success','title'=>'Thông báo' ,'message'=>'Đặt hàng thành công']);
        }else{
            //thanh toán chưa đăng nhập

        }
    }

    public  function getConfirm(){
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
//dd($cart);

//        $qty_down = $cart->items->
        return view('customer.page.confirm');
    }

    public  function getFaq(){
        return view('customer.page.faq');
    }

    public  function getLogin(){
        return view('customer.page.login');
    }

    public function postLogin(Request $req){
        $cre = array('email'=>$req->email,'password'=>$req->password);
        if(Auth::attempt($cre)){
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

    public  function postReg(Request $req){
        $user = new User();
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();

        $cus = new Customer();
        $cus->id_user = $user->id;
        $cus->c_name = $req->name;
        $cus->address = $req->address.', '.$req->town;
        $cus->shipping_address = $req->town. ', '.$req->address;
        $cus->phone = $req->phone;
        $cus->save();

        return redirect()->back()->with(['flag'=>'success','title'=>'Thông báo' ,'message'=>'Đăng ký thành công']);
    }

    public function postLogout(){
        Auth::logout();

        return redirect()->route('index')->with(['flag'=>'success','title'=>'Thông báo' ,'message'=>'Đăng xuất thành công']);
    }

    public  function getSearch(){
        return view('customer.page.search');
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

        return redirect()->back()->with(['flag'=>'success','title'=>'Thông báo' ,'message'=>'Đổi mật khẩu thành công']);
    }

    public function postDelfb($id,Request $req){
        Feedback::find($id)->delete();
        return redirect()->back()->with(['flag'=>'success','title'=>'Thông báo' ,'message'=>'Xoá đánh giá thành công']);
    }

    public  function getWishlist(){
        return view('customer.page.wishlist');
    }
}
