<?php

namespace App\Providers;

use App\Cart;
use App\Product;
use App\ProductColor;
use App\ProductType;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer('customer.header',function($view){
            $arr_ctl = ProductType::leftjoin('catalogs as ctl','ctl.id_type','=','product_type.id')
                ->leftjoin('products as p','p.id_catalog','=','ctl.id')
                ->leftjoin('product_color as pc','pc.id_product','=','p.id')
                ->leftjoin('product_image as pi','pi.id_color','=','pc.id')
                ->select('ctl.id','type','catalog','image')
                ->groupBy('ctl.id')
                ->get();
            $full_type = $arr_ctl->groupBy('type');
            $view->with(
                'full_type',$full_type
            );
        });

//        view()->composer('customer.page.cart',function($view){
//            if(Session('cart')){
//                $oldCart = Session::get('cart');
//                $cart = new Cart($oldCart);
//                $color = ProductColor::all();
////                 dd($cart);
//                $view->with([
//                    'cart'=>Session::get('cart'),
//                    'product_cart'=>$cart->items,
//                    'totalPrice'=>$cart->totalPrice,
//                    'totalQty'=>$cart->totalQty,
//                    'color'=>$color,
//                ]);
//            }
//        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
