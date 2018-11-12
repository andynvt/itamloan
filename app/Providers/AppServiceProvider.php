<?php

namespace App\Providers;

use App\Cart;
use App\Product;
use App\ProductColor;
use App\ProductType;
use App\Promotion;
use Carbon\Carbon;
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
                ->select('ctl.id','type','catalog','catalog_image','product_type.id as ptid')
                ->groupBy('ctl.id')
                ->get();
            $full_type = $arr_ctl->groupBy('type');
            $view->with(
                'full_type',$full_type
            );
        });
        view()->composer('customer.master',function($view){

            $promo = Promotion::all();
            $now = Carbon::now();
            foreach ($promo as $pr){
                if($pr->end_date->lt($now)){
                    $product = Product::where('id_promo',$pr->id)->get();
                    foreach ($product as $p){
                        $p->id_promo = null;
                        $p->save();
                    }
                }
            }
        });

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
