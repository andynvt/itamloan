<?php

namespace App\Http\Controllers;

use App\Bill;
use App\BillDetail;
use App\BillStatus;
use App\Catalog;
use App\Customer;
use App\Feedback;
use App\Product;
use App\ProductColor;
use App\ProductImage;
use App\ProductType;
use App\ProductVideo;
use App\Promotion;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public static function checkTimePromo($time)
    {
        $cktime = Carbon::parse($time);
        $now = Carbon::now();
        if ($cktime->lt($now)) {
            //het han
            return true;
        }
        return false;
    }

    public static function getStringColor($name)
    {
        $text = mb_substr($name, 0, 100);
        $i = mb_strrpos($text, ' ');
        if ($i !== false)
            $text = mb_substr($text, 0, $i);
        return $text;
    }

    public static function convertMoney($n,$precision = 1)
    {
        if ($n < 900) {
            // 0 - 900
            $n_format = number_format($n, $precision);
            $suffix = '';
        } else if ($n < 900000) {
            // 0.9k-850k
            $n_format = number_format($n / 1000, $precision);
            $suffix = ' Nghìn';
        } else if ($n < 900000000) {
            // 0.9m-850m
            $n_format = number_format($n / 1000000, $precision);
            $suffix = ' Triệu';
        } else if ($n < 900000000000) {
            // 0.9b-850b
            $n_format = number_format($n / 1000000000, $precision);
            $suffix = ' Tỷ';
        } else {
            // 0.9t+
            $n_format = number_format($n / 1000000000000, $precision);
            $suffix = ' Nghìn Tỷ';
        }
        // Remove unecessary zeroes after decimal. "1.0" -> "1"; "1.00" -> "1"
        // Intentionally does not affect partials, eg "1.50" -> "1.50"
        if ( $precision > 0 ) {
            $dotzero = '.' . str_repeat( '0', $precision );
            $n_format = str_replace( $dotzero, '', $n_format );
        }
        return $n_format . $suffix;
    }

    public static function checkCustomer($id){
        $medal = "new";
        $fb = Feedback::where('id_customer',$id)->first();
        $bill = Bill::where('id_customer',$id)->first();
//        print_r($fb);
        $ckvip = Bill::where('id_customer',$id)->select('total_price')->get();
        $total = 0;
        foreach ($ckvip as $i){
            $total += $i->total_price;
        }
        if($total > 100000000){
            $medal = "svip";
        }elseif($total > 50000000){
            $medal = "vip";
        }elseif($total > 20000000){
            $medal = "tn";
        }else{
            if($fb){
                $medal = "fb";
            }
            if($bill){
                $medal = "buy";
            }
        }
        return $medal;
    }

    public function AdminThongke()
    {

        $material_color = array('#F44336','#3F51B5','#009688','#FFEB3B','#795548','#E91E63','#2196F3','#4CAF50','#FFC107','#9E9E9E',
            '#9C27B0','#03A9F4','#8BC34A','#FF9800','#607D8B','#673AB7','#00BCD4','#CDDC39','#FF5722','#000000');

        function random_color() {
            $material_color = array('#F44336','#E91E63','#9C27B0','#673AB7','#3F51B5','#2196F3','#03A9F4','#00BCD4','#009688','#4CAF50',
                '#8BC34A','#CDDC39','#FFEB3B','#FFC107','#FF9800','#FF5722','#795548','#9E9E9E','#607D8B','#000000');
            shuffle( $material_color );
            return array_shift( $material_color );
        }
        function hex2rgba($color, $opacity = false) {

            $default = 'rgb(0,0,0)';

            //Return default if no color provided
            if(empty($color))
                return $default;

            //Sanitize $color if "#" is provided
            if ($color[0] == '#' ) {
                $color = substr( $color, 1 );
            }

            //Check if color has 6 or 3 characters and get values
            if (strlen($color) == 6) {
                $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
            } elseif ( strlen( $color ) == 3 ) {
                $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
            } else {
                return $default;
            }

            //Convert hexadec to rgb
            $rgb =  array_map('hexdec', $hex);

            //Check if opacity is set(rgba or rgb)
            if($opacity){
                if(abs($opacity) > 1)
                    $opacity = 1.0;
                $output = 'rgba('.implode(",",$rgb).','.$opacity.')';
            } else {
                $output = 'rgb('.implode(",",$rgb).')';
            }

            //Return rgb(a) color string
            return $output;
        }
//                function random_color() {
//            return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
//        }

        //Thống kê chung
        $thang = Carbon::now()->month;
        $nam = Carbon::now()->year;

        $dh = Bill::select(DB::raw('count(*) as cnt'))->value('cnt');
        $sp = Product::select(DB::raw('sum(inventory) as cnt'))->value('cnt');
        $kh = Customer::select(DB::raw('count(*) as cnt'))->value('cnt');
        $dg = Feedback::select(DB::raw('count(*) as cnt'))->value('cnt');

        $dt_hn = Bill::select(DB::raw('sum(total_price) as sum'))
            ->whereDate('created_at', Carbon::today())->value('sum');
        $dt_t = Bill::select(DB::raw('sum(total_price) as sum'))
            ->whereMonth('created_at', $thang)->value('sum');
        $dt_n = Bill::select(DB::raw('sum(total_price) as sum'))
            ->whereYear('created_at', $nam)->value('sum');
        $t_dt = Bill::select(DB::raw('sum(total_price) as sum'))->value('sum');

        //Doanh thu
        $rev = ProductType::select('id','type')->get()->toArray();
        foreach ($rev as $index => $value){
            $rev[$index]['color'] = $material_color[$index];
            $rev[$index]['bgcolor'] = hex2rgba($material_color[$index],0.2);
            for ($i=1; $i<13; $i++){
                $ip[$index][$i]['thang'] = $i;
                $qr = Bill::select(DB::raw('sum(total_price) as sum'))
                    ->leftjoin('bill_detail as bd','bd.id_bill','=','bills.id')
                    ->leftjoin('products as p','p.id','=','bd.id_product')
                    ->leftjoin('catalogs as ctl','ctl.id','=','p.id_catalog')
                    ->where('ctl.id_type',$value['id'])
                    ->whereMonth('bd.created_at', $i)->whereYear('bd.created_at', $nam)
                    ->value('sum');
                $ip[$index][$i]['dt'] = ($qr == null) ? 0 : $qr;
            }
            $rev[$index]['data'] = $ip[$index];
        }

        //Số lượng sp bán ra
        $slsp = ProductType::select('id','type')->get()->toArray();
        foreach ($slsp as $index => $value){
            $slsp[$index]['color'] = $material_color[$index];
            for ($i=1; $i<13; $i++){
                $ip[$index][$i]['thang'] = $i;
                $qr = BillDetail::select(DB::raw('sum(quantity) as sum'))
                    ->leftjoin('products as p','p.id','=','bill_detail.id_product')
                    ->leftjoin('catalogs as ctl','ctl.id','=','p.id_catalog')
                    ->where('ctl.id_type',$value['id'])
                    ->whereMonth('bill_detail.created_at', $i)->whereYear('bill_detail.created_at', $nam)
                    ->value('sum');
                $ip[$index][$i]['sl'] = ($qr == null) ? 0 : $qr;
            }
            $slsp[$index]['data'] = $ip[$index];
        }

        //Đơn hàng
        $bill = array();
        for ($i=1; $i<13; $i++){
           $bill[$i]['thang'] = $i;
           $bill[$i]['tc'] = Bill::select(DB::raw('count(*) as cnt'))
               ->where('id_status',4)->whereMonth('created_at', $i)->whereYear('created_at', $nam)->value('cnt');
           $bill[$i]['tb'] = Bill::select(DB::raw('count(*) as cnt'))
               ->where('id_status',5)->whereMonth('created_at', $i)->whereYear('created_at', $nam)->value('cnt');
        }

        //Trạng thái đơn hàng
        $status = BillStatus::all()->toArray();
        foreach ($status as $i => $value){
            $status[$i]['sl'] = Bill::select(DB::raw('count(*) as cnt'))->where('id_status',$value['id'])->value('cnt');
            $status[$i]['color'] = $material_color[$i];
        }

        //Loại sản phẩm
        $pt = ProductType::select('id','type')->get()->toArray();
        foreach ($pt as $i => $value){
            $qr1 = BillDetail::select(DB::raw('sum(quantity) as sum'))
                ->leftjoin('products as p','p.id','=','bill_detail.id_product')
                ->leftjoin('catalogs as ctl','ctl.id','=','p.id_catalog')
                ->leftjoin('product_type as pt', 'pt.id','=','ctl.id_type')
                ->where('pt.id',$value['id'])->value('sum');
            $pt[$i]['daban'] = ($qr1 == null) ? 0 : $qr1;
            $qr2 = Product::select(DB::raw('sum(inventory) as sum'))
                ->leftjoin('catalogs as ctl','ctl.id','=','products.id_catalog')
                ->leftjoin('product_type as pt', 'pt.id','=','ctl.id_type')
                ->where('pt.id',$value['id'])->value('sum');
            $pt[$i]['tonkho'] = ($qr2 == null) ? 0 : $qr2;
        }

        //Đánh giá
        $fb = array();
        for ($i=5; $i>0; $i--){
            $fb[$i]['stars'] = $i." Sao";
            $fb[$i]['sl'] = Feedback::select(DB::raw('count(*) as cnt'))->where('stars',$i)->value('cnt');
            $fb[$i]['color'] = $material_color[$i+1];
        }

        //4 loại
        $type = ProductType::select('id','type')->get()->toArray();
        foreach ($type as $index => $value){
//            $type['type'] = $value['type'];
            $ip[$index] = Catalog::where('id_type',$value['id'])->select('id','catalog')->groupBy('catalog')->orderBy('id')->get()->toArray();
            foreach ($ip[$index] as $i => $v){
//                $ip[$index][$i]['catalog'] = str_replace($value['type']." ","",$ip[$index][$i]['catalog']);
                $qr1 = BillDetail::select(DB::raw('sum(quantity) as sum'))
                    ->leftjoin('products as p','p.id','=','bill_detail.id_product')
                    ->leftjoin('catalogs as ctl','ctl.id','=','p.id_catalog')
                    ->where('ctl.id',$v['id'])
                    ->value('sum');
                $ip[$index][$i]['daban'] = ($qr1 == null) ? 0 : $qr1;
                $qr2 = Product::select(DB::raw('sum(inventory) as sum'))
                    ->leftjoin('catalogs as ctl','ctl.id','=','products.id_catalog')
                    ->where('ctl.id',$v['id'])->value('sum');
                $ip[$index][$i]['tonkho'] = ($qr2 == null) ? 0 : $qr2;
            }
            $type[$index]['data'] = $ip[$index];
        }

        return view('admin.page.dashboard',compact('dh','sp','kh','dg','thang','nam','dt_hn','dt_t','dt_n',
            't_dt','status','fb','pt','type','bill','slsp','rev'));
    }

    public function AdminKhuyenMai()
    {
        $km = Promotion::orderByDesc('end_date')->get();
        $p = Product::leftjoin('catalogs as ctl','ctl.id','=','products.id_catalog')
            ->leftjoin('product_type as pt', 'pt.id','=','ctl.id_type')
            ->leftjoin('product_color as pc','pc.id_product','=','products.id')
            ->leftjoin('product_image as pi','pi.id_color','=','pc.id')
            ->select('products.id','products.name','image','catalog','type','price')
            ->groupBy('products.id')
            ->where('id_promo',null)
            ->get();

        $spkm = Product::leftjoin('catalogs as ctl','ctl.id','=','products.id_catalog')
            ->leftjoin('product_type as pt', 'pt.id','=','ctl.id_type')
            ->leftjoin('product_color as pc','pc.id_product','=','products.id')
            ->leftjoin('product_image as pi','pi.id_color','=','pc.id')
            ->leftjoin('promotions as promo','promo.id','=','products.id_promo')
            ->select('products.id','products.name','image','catalog','type','price','promo.id as promoid')
            ->groupBy('products.id')
            ->get();
//        dd($spkm);
//        dd($km[0]->start_date);
        return view('admin.page.promotion', compact('km','p','spkm'));
    }

    public function ThemKM(Request $req)
    {
        $pr = new Promotion();
        $pr->promo_name = $req->promo_name;
        $pr->promo_info = $req->promo_info;
        $pr->percent = $req->percent;
        $pr->start_date = $req->start_date;
        $pr->end_date = $req->end_date;

        $img = $req->promo_image;
        if ($req->hasfile('promo_image')) {
            $name = date('Y-m-d-H-i-s') . "-" . $img->getClientOriginalName();
            $img->move('storage/promo', $name);
            $pr->promo_image = $name;
        }
        $pr->save();

        foreach ($req->pid as $i) {
            $p = Product::find($i);
            $p->id_promo = $pr->id;
            $p->save();
        }
        return redirect()->back()->with(['flag' => 'success', 'message' => 'Thêm ' . $req->promo_name . ' thành công!']);
    }

    public function SuaKM(Request $req, $id){
        $km = Promotion::find($id);
        if ($req->hasfile('images')) {
            Storage::delete('app/public/promo/' . $km->promo_image);
            unlink(storage_path('app/public/promo/' . $km->promo_image));

            $img = $req->images;
            $name = date('Y-m-d-H-i-s') . "-" . $img->getClientOriginalName();
            $img->move('storage/promo', $name);

            $km->promo_image = $name;
        }
        $km->promo_name = $req->promo_name;
        $km->percent = $req->percent;
        $km->start_date = $req->start_date;
        $km->end_date = $req->end_date;
        $km->save();
        return redirect()->back()->with(['flag' => 'success', 'message' => 'Sửa ' . $req->promo_name . ' thành công!']);
    }

    public function SuaSPKM(Request $req, $id_promo){
        $promo = Promotion::where('id',$id_promo)->value('promo_name');
        foreach ($req->spid as $id){
            $p = Product::find($id);
            $p->id_promo = $id_promo;
            $p->save();
        }
        return redirect()->back()->with(['flag' => 'success', 'message' => 'Sửa ' . $promo . ' thành công!']);
    }

    public function XoaSPKM(Request $req){
        $sp = Product::find($req->idsp);
        $sp->id_promo = null;
        $sp->save();
        return json_encode($sp);
    }

    public function XoaKM(Request $req)
    {
        $km = Promotion::find($req->id);
        $p = Product::where('id_promo', $req->id)->get();
        foreach ($p as $i){
            $i->id_promo = null;
            $i->save();
        }
        $km->delete();
        return redirect()->back()->with(['flag' => 'success', 'message' => 'Xoá ' . $km->promo_name . ' thành công!']);
    }

    public function AdminLSP()
    {
        $lsp = ProductType::all();
        $type_detail = ProductType::select('id', 'type_detail')->get();
        $gr_td = $type_detail->groupBy('id');

        foreach ($gr_td as $index => $value) {
            $td[$index] = explode(',', $value[0]->type_detail);
        }

        return view('admin.page.product_type', compact('lsp', 'td'));
    }

    public function ThemLoai(Request $req)
    {
        $td = "";
        foreach ($req->type_detail as $t) {
            if ($t != null) {
                $td = $td . ", " . $t;
            }
        }
        $kq = substr($td, 2);

        $pt = new ProductType();
        $pt->type = $req->type;
        $pt->type_detail = $kq;
        $pt->save();
        return redirect()->back()->with(['flag' => 'success', 'message' => 'Thêm ' . $req->type . ' thành công!']);
    }

    public function SuaLoai(Request $req, $id)
    {
        $td = "";
        foreach ($req->type_detail as $t) {
            if ($t != null) {
                $td = $td . ", " . $t;
            }
        }
        $kq = substr($td, 2);

        $pt = ProductType::find($id);
        $pt->type = $req->type;
        $pt->type_detail = $kq;
        $pt->save();
        return redirect()->back()->with(['flag' => 'success', 'message' => 'Sửa ' . $req->type . ' thành công!']);
    }

    public function XoaLoai(Request $req)
    {
        $pt = ProductType::find($req->id);
        $ptname = ProductType::where('id', $req->id)->value('type');
        $pt->delete();
        return redirect()->back()->with(['flag' => 'success', 'message' => 'Xoá ' . $ptname . ' thành công!']);
    }

    public function AdminDSP()
    {
        $dsp = Catalog::leftjoin('product_type as pt', 'pt.id', '=', 'catalogs.id_type')
            ->select('catalogs.*', 'pt.type', 'pt.id as ptid')->get();
        $pt = ProductType::pluck('type', 'id');
        return view('admin.page.catalog', compact('dsp', 'pt'));
    }

    public function ThemDong(Request $req)
    {
        $ctl = new Catalog();

        $img = $req->catalog_image;
        if ($req->hasfile('catalog_image')) {
            $name = date('Y-m-d-H-i-s') . "-" . $img->getClientOriginalName();
            $img->move('storage/product', $name);
            $ctl->catalog_image = $name;
        }
        $ctl->id_type = $req->type;
        $ctl->catalog = $req->catalog;
        $ctl->slogan = $req->slogan;

        $ctl->save();
        return redirect()->back()->with(['flag' => 'success', 'message' => 'Thêm ' . $req->catalog . ' thành công!']);
    }

    public function SuaDong(Request $req, $id)
    {
        $ctl = Catalog::find($id);

        if ($req->hasfile('catalog_image')) {
            Storage::delete('app/public/product/' . $ctl->catalog_image);
            unlink(storage_path('app/public/product/' . $ctl->catalog_image));

            $img = $req->catalog_image;
            $name = date('Y-m-d-H-i-s') . "-" . $img->getClientOriginalName();
            $img->move('storage/product', $name);

            $ctl->catalog_image = $name;
        }

        $ctl->id_type = $req->type;
        $ctl->catalog = $req->catalog;
        $ctl->slogan = $req->slogan;

        $ctl->save();
        return redirect()->back()->with(['flag' => 'success', 'message' => 'Sửa ' . $req->type . ' thành công!']);
    }

    public function XoaDong(Request $req)
    {
        $ctl = Catalog::find($req->id);
        $ctlname = Catalog::where('id', $req->id)->value('catalog');
        $ctl->delete();
        return redirect()->back()->with(['flag' => 'success', 'message' => 'Xoá ' . $ctlname . ' thành công!']);
    }

    public function AdminSP()
    {
        $sp = Product::leftjoin('catalogs as ctl', 'ctl.id', '=', 'products.id_catalog')
            ->leftjoin('product_type as pt', 'pt.id', '=', 'ctl.id_type')
            ->leftjoin('product_color as pc', 'pc.id_product', '=', 'products.id')
            ->leftjoin('product_image as pi', 'pi.id_color', '=', 'pc.id')
            ->leftjoin('promotions as promo', 'promo.id', '=', 'products.id_promo')
            ->select('products.*', 'promo.percent', 'promo.id as promoid', 'ctl.catalog', 'pt.type', 'pc.color', 'pi.image', 'pt.id as ptid', 'ctl.id as ctlid')
            ->groupBy('products.id')
            ->get();
        $pt = ProductType::pluck('type', 'id');
        $ctl = Catalog::pluck('catalog', 'id');
        $promo = Promotion::all();
        $type_detail = ProductType::pluck('type_detail', 'id');

        $td = Product::leftjoin('catalogs as ctl', 'ctl.id', '=', 'products.id_catalog')
            ->leftjoin('product_type as pt', 'pt.id', '=', 'ctl.id_type')
            ->select('products.id', 'type_detail', 'specs')->get();
        foreach ($td as $t) {
            $t->type_detail = explode(',', $t->type_detail);
            $t->specs = explode(',', $t->specs);
        }
        return view('admin.page.product', compact('sp', 'pt', 'promo', 'td', 'ctl'));
    }

    public function LoadCatalog(Request $req)
    {
        $ctl = Catalog::where('id_type', $req->id)->get();
        $td = ProductType::where('id', $req->id)->value('type_detail');
        $extd = explode(',', $td);
        return json_encode([$ctl, $extd]);
    }

    public function LoadCatalogEdit(Request $req)
    {
        $id_ctl = Product::where('id', $req->id)->value('id_catalog');
        $id_type = Catalog::where('id', $id_ctl)->value('id_type');

        $ctl = Catalog::where('id_type', $id_type)->get();
        return json_encode([$ctl, $id_ctl]);
    }

    public function LoadSpec(Request $req)
    {
        $spec = Product::where('id', $req->id)->value('specs');
        $type_detail = ProductType::leftjoin('catalogs as ctl', 'ctl.id_type', '=', 'product_type.id')
            ->leftjoin('products as p', 'p.id_catalog', '=', 'ctl.id')
            ->where('p.id', $req->id)
            ->select('type_detail')->get();
        foreach ($type_detail as $t) {
            $td = $t->type_detail;
        }
        $exspecs = explode(',', $spec);
        $extd = explode(',', $td);
        return json_encode([$extd, $exspecs]);
    }

    public function LoadVid(Request $req)
    {
        $video = ProductVideo::where('id_product', $req->id)->select('v_name', 'v_link')->get();
        return json_encode($video);
    }

    public function LoadImg(Request $req)
    {
        $id_color = ProductColor::where('id_product', $req->id)->value('id');
        $img = ProductImage::where('id_color', $id_color)->select('id', 'image')->get();
        return json_encode($img);
    }

    public function ThemSP(Request $req)
    {
        $spec = "";
        foreach ($req->specs as $t) {
            if ($t != null) {
                $spec = $spec . ", " . $t;
            }
        }
        $kq = substr($spec, 2);

        $p = new Product();
        if ($req->hasfile('images')) {
            $p->id_catalog = $req->catalog;
            $p->id_promo = $req->promo;
            $p->name = $req->name . ' ' . $req->storage . ' ' . $req->color;
            $p->price = $req->price;
            $p->specs = $kq;
            $p->warranty = $req->warranty;
            $p->inventory = $req->inventory;
            $p->description = $req->description;
            $p->save();

            if ($req->v_name != null) {
                foreach ($req->v_name as $i => $v) {
                    $pv = new ProductVideo();
                    $pv->id_product = $p->id;
                    $pv->v_name = $req->v_name[$i];
                    $pv->v_link = $req->v_link[$i];
                    $pv->save();
                }
            }

            $pc = new ProductColor();
            $pc->id_product = $p->id;
            $pc->color = $req->color;
            $pc->save();

            foreach ($req->file('images') as $image) {
                $namee = date('Y-m-d-H-i-s') . "-" . $image->getClientOriginalName();
                $image->move('storage/product', $namee);
                $img[] = $namee;
            }
            foreach ($img as $i) {
                $pi = new ProductImage();
                $pi->id_color = $pc->id;
                $pi->image = $i;
                $pi->save();
            }
        }

        return redirect()->back()->with(['flag' => 'success', 'message' => 'Thêm ' . $req->name . ' thành công!']);
    }

    public function SuaSP(Request $req, $id)
    {
        $spec = "";
        foreach ($req->specs as $t) {
            if ($t != null) {
                $spec = $spec . ", " . $t;
            }
        }
        $kq = substr($spec, 2);

        $p = Product::find($id);
        $p->id_catalog = $req->catalog;
        $p->id_promo = $req->promo;
        $p->name = $req->name . " " . $req->color;
        $p->price = $req->price;
        $p->inventory = $req->inventory;
        $p->specs = $kq;
        $p->warranty = $req->warranty;
        $p->description = $req->description;
        $p->save();

        ProductVideo::where('id_product', $id)->delete();
        if ($req->v_name != null) {
            foreach ($req->v_name as $i => $v) {
                $pv = new ProductVideo();
                $pv->id_product = $p->id;
                $pv->v_name = $req->v_name[$i];
                $pv->v_link = $req->v_link[$i];
                $pv->save();
            }
        }

        $pc = ProductColor::where('id_product', $id)->first();
        $pc->color = $req->color;
        $pc->save();

        if ($req->hasfile('images')) {
            foreach ($req->file('images') as $image) {
                $namee = date('Y-m-d-H-i-s') . "-" . $image->getClientOriginalName();
                $image->move('storage/product', $namee);
                $img[] = $namee;
            }
            foreach ($img as $i) {
                $pi = new ProductImage();
                $pi->id_color = $pc->id;
                $pi->image = $i;
                $pi->save();
            }
        }
        return redirect()->back()->with(['flag' => 'success', 'message' => 'Sửa ' . $req->name . ' thành công!']);
    }

    public function DelImg(Request $req)
    {
        $idimg = ProductImage::find($req->iid);
        ProductImage::find($idimg->id)->delete();
        Storage::delete('app/public/product/' . $idimg->image);
        unlink(storage_path('app/public/product/' . $idimg->image));
        return json_encode($idimg);
    }

    public function XoaSP(Request $req)
    {
        $id = $req->id;
        $id_color = ProductColor::where('id_product', $id)->value('id');
        $p = Product::find($id);

        $idimg = ProductImage::where('id_color', $id_color)->get();
        foreach ($idimg as $i) {
            ProductImage::find($i->id)->delete();
            Storage::delete('app/public/product/' . $i->image);
            unlink(storage_path('app/public/product/' . $i->image));
        }
        $pname = Product::where('id', $req->id)->value('name');
        $p->delete();
        return redirect()->back()->with(['flag' => 'success', 'message' => 'Xoá ' . $pname . ' thành công!']);
    }

    public function AdminDonHang()
    {
        $dh = Bill::leftjoin('customers as c','c.id','=','bills.id_customer')
            ->leftjoin('bill_status as bs','bs.id','=','bills.id_status')
            ->leftjoin('payments as pm','pm.id','=','bills.id_payment')
            ->select('bills.*','status','bs.id as bsid','c_name','phone','payment')
            ->orderBy('bills.created_at','desc')->get();

        $bd = BillDetail::leftjoin('products as p','p.id','=','bill_detail.id_product')
            ->leftjoin('bills as b','b.id','=','bill_detail.id_bill')
            ->leftjoin('product_color as pc', 'pc.id_product', '=', 'p.id')
            ->leftjoin('product_image as pi', 'pi.id_color', '=', 'pc.id')
            ->leftjoin('promotions as promo', 'promo.id', '=', 'p.id_promo')
            ->select('b.id as bid','image','name','quantity','p.price','percent')
            ->groupBy('bill_detail.id')
            ->orderBy('quantity','desc')
            ->get();

        $tk_today = Bill::select(DB::raw('count(*) as cnt, sum(total_price) as sum'))
            ->whereDate('created_at', Carbon::today())->first();
        $tk_month = Bill::select(DB::raw('count(*) as cnt, sum(total_price) as sum'))
            ->whereMonth('created_at', Carbon::now()->month)->first();

        $thang = Carbon::now()->month;
        return view('admin.page.bill',compact('dh','bd','tk_today','tk_month','thang'));
    }

    public function CheckBill(Request $req){
        $b = Bill::find($req->id);

        $info = Bill::leftjoin('customers as c','c.id','=','bills.id_customer')
            ->leftjoin('users as u','u.id','=','c.id_user')
            ->leftjoin('bill_status as bs','bs.id','=','bills.id_status')
            ->leftjoin('payments as pm','pm.id','=','bills.id_payment')
            ->leftjoin('bill_detail as bd','bd.id_bill','=','bills.id')
            ->select('bills.*','payment','status','c_name','phone','address','shipping_address','email')
            ->where('bills.id',$req->id)->groupBy('bd.id_product')->first();

        $product = Product::leftjoin('promotions as promo','promo.id','=','products.id_promo')
            ->leftjoin('bill_detail as bd','bd.id_product','=','products.id')
            ->leftjoin('bills as b','b.id','=','bd.id_bill')
            ->select('name','quantity','percent','price')
            ->where('b.id',$req->id)->get();
        $email = User::leftjoin('customers as c','c.id_user','=','users.id')
            ->leftjoin('bills as b','b.id_customer','=','c.id')
            ->where('b.id',$req->id)->value('email');

        $data = ['bill' => $info, 'product' => $product, 'email' => $email];
        if($req->confirm == 'gui'){
            Mail::send('admin.mail.dagui',$data,function ($msg) use ($email){
                $msg->from('ngvantai.n8@gmail.com','itamloan.vn');
                $msg->to($email,'Khách hàng')->subject('🍎🍎 Đơn hàng đã được gửi đi ✅');
            });
            if (Mail::failures()) {}
            $b->id_status = 3;
            $b->save();
        }

        if($req->confirm == 'ht'){
            Mail::send('admin.mail.hoantat',$data,function ($msg) use ($email){
                $msg->from('ngvantai.n8@gmail.com','itamloan.vn');
                $msg->to($email,'Khách hàng')->subject('🍎🍎 Đơn hàng đã hoàn tất 🎉️');
            });
            if (Mail::failures()) {}
            $b->id_status = 4;
            $b->save();
        }
        return json_encode($data);
    }

    public function HuyDon (Request $req){
        $b = Bill::find($req->id);

        $email = User::leftjoin('customers as c','c.id_user','=','users.id')
            ->leftjoin('bills as b','b.id_customer','=','c.id')
            ->where('b.id',$req->id)->value('email');

        $info = Bill::leftjoin('customers as c','c.id','=','bills.id_customer')
            ->leftjoin('users as u','u.id','=','c.id_user')
            ->leftjoin('bill_status as bs','bs.id','=','bills.id_status')
            ->leftjoin('payments as pm','pm.id','=','bills.id_payment')
            ->leftjoin('bill_detail as bd','bd.id_bill','=','bills.id')
            ->select('bills.*','payment','status','c_name','phone','address','shipping_address','email')
            ->where('bills.id',$req->id)->groupBy('bd.id_product')->first();

        $product = Product::leftjoin('promotions as promo','promo.id','=','products.id_promo')
            ->leftjoin('bill_detail as bd','bd.id_product','=','products.id')
            ->leftjoin('bills as b','b.id','=','bd.id_bill')
            ->select('name','quantity','percent','price')
            ->where('b.id',$req->id)->get();
        $data = ['bill' => $info, 'product' => $product, 'lydo' => $req->lydo, 'email' => $email];

        Mail::send('admin.mail.bihuy',$data,function ($msg) use ($email){
            $msg->from('ngvantai.n8@gmail.com','itamloan.vn');
            $msg->to($email,'Khách hàng')->subject('🍎🍎 Đơn hàng đã bị huỷ ❌');
        });
        if (Mail::failures()) {}

        $b->id_status = 5;
        $b->admin_note = $req->lydo;
        $b->save();
        return json_encode($b);
    }

    public function DaGui(){
        return view('admin.mail.dagui');
    }

    public function LoadKH(Request $req)
    {
        $kh = Customer::leftjoin('bills as b','b.id_customer','=','customers.id')
            ->leftjoin('users as u','u.id','=','customers.id_user')
            ->select('customers.*','email')
            ->where('b.id',$req->id)->get();
        return json_encode($kh);
    }

    public function AdminKhachHang()
    {
        $kh = Customer::leftjoin('users as u','u.id','=','customers.id_user')
            ->select('customers.*','u.email')
            ->get();
        $fb = Feedback::leftjoin('customers as c', 'c.id', '=', 'feedbacks.id_customer')
            ->leftjoin('products as p','p.id','=','feedbacks.id_product')
            ->leftjoin('product_color as pc', 'pc.id_product', '=', 'p.id')
            ->leftjoin('product_image as pi', 'pi.id_color', '=', 'pc.id')
            ->select('feedbacks.*','p.name','image','c.id as cid')
            ->groupBy('p.id')
            ->get();
        return view('admin.page.customer',compact('kh','fb'));
    }

    public function LoadBill(Request $req)
    {
        $b = Bill::leftjoin('bill_status as bs','bs.id','=','bills.id_status')
            ->leftjoin('customers as c','c.id','=','bills.id_customer')
            ->select('bills.*','bs.status')
            ->where('c.id',$req->id)->get();
        return json_encode($b);
    }

    public function AdminDanhGia()
    {
        $sp = Product::leftjoin('product_color as pc', 'pc.id_product', '=', 'products.id')
            ->leftjoin('product_image as pi', 'pi.id_color', '=', 'pc.id')
            ->leftjoin('feedbacks as f','f.id_product','=','products.id')
            ->groupBy('products.id')
            ->select(DB::raw('count(f.id) as no_fb, avg(f.stars) as avg, products.*, pi.image'))
            ->where('f.id','<>',null)->orderBy('f.created_at')->get();
        $fb = Feedback::leftjoin('customers as c','c.id','=','feedbacks.id_customer')
            ->leftjoin('products as p','p.id','=','feedbacks.id_product')
            ->select('feedbacks.*','c.c_name','c.avatar','p.id as pid')->get();
        return view('admin.page.feedback',compact('sp','fb'));
    }
}
