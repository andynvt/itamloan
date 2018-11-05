<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Catalog;
use App\Customer;
use App\Feedback;
use App\Product;
use App\ProductColor;
use App\ProductImage;
use App\ProductType;
use App\ProductVideo;
use App\Promotion;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function AdminThongke()
    {
        return view('admin.page.dashboard');
    }

    public function AdminKhuyenMai()
    {
        $km = Promotion::orderByDesc('end_date')->get();
        $p = Product::leftjoin('catalogs as ctl','ctl.id','=','products.id_catalog')
            ->leftjoin('product_type as pt', 'pt.id','=','ctl.id_type')
            ->leftjoin('product_color as pc','pc.id_product','=','products.id')
            ->leftjoin('product_image as pi','pi.id_color','=','pc.id')
            ->select('products.id','products.name','image','catalog','type','price')
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

    public static function getStringColor($name)
    {
        $text = mb_substr($name, 0, 100);
        $i = mb_strrpos($text, ' ');
        if ($i !== false)
            $text = mb_substr($text, 0, $i);
        return $text;
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
        return view('admin.page.bill');
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
            ->get();
//        dd($fb);
        return view('admin.page.customer',compact('kh','fb'));
    }

    public static function checkCustomer($id){
        $medal = "new";
        $fb = Feedback::where('id_customer',$id)->get();
        $bill = Bill::where('id_customer',$id)->get();
        $ckvip = Bill::where('id_customer',$id)->select('total_price')->get();
        $total = 0;
        foreach ($ckvip as $i){
            $total += $i->total_price;
        }
        if($total > 100000000){
            $medal = "svip";
        }elseif($total >50000000){
            $medal = "vip";
        }else{
            if($fb != null){
                $medal = "fb";
            }
            if($bill != null){
                $medal = "buy";
            }
        }
        return $medal;

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
        return view('admin.page.feedback');
    }
}
