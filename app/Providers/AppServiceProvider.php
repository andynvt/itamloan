<?php

namespace App\Providers;

use App\Product;
use App\ProductType;
use Illuminate\Support\Facades\Schema;
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
                ->select('type','catalog','image')
                ->groupBy('ctl.id')
                ->get();
            $full_type = $arr_ctl->groupBy('product_type.id');
//dd($full_type);
            $view->with([
                'full_type',$full_type,

            ]);
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
