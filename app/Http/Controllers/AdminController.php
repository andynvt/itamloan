<?php

namespace App\Http\Controllers;

use App\Catalog;
use App\Product;
use App\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function AdminThongke(){
        return view('admin.page.dashboard');
    }

    public function AdminKhuyenMai(){
        return view('admin.page.promotion');
    }

    public function AdminLSP(){
        $lsp = ProductType::all();
        $type_detail = ProductType::select('id', 'type_detail')->get();
        $gr_td = $type_detail->groupBy('id');

        foreach($gr_td as $index => $value){
            $td[$index] = explode(',', $value[0]->type_detail);
        }

        return view('admin.page.product_type',compact('lsp','td'));
    }

    public function ThemLoai(Request $req){
        $td = "";
        foreach ($req->type_detail as $t){
            if($t != null){
                $td = $td.", ".$t;
            }
        }
        $kq = substr($td,2);

        $pt = new ProductType();
        $pt->type = $req->type;
        $pt->type_detail = $kq;
        $pt->save();
        return redirect()->back()->with(['flag' => 'success', 'message' => 'Thêm '.$req->type.' thành công!']);
    }

    public function SuaLoai(Request $req, $id){
        $td = "";
        foreach ($req->type_detail as $t){
            if($t != null){
                $td = $td.", ".$t;
            }
        }
        $kq = substr($td,2);

        $pt = ProductType::find($id);
        $pt->type = $req->type;
        $pt->type_detail = $kq;
        $pt->save();
        return redirect()->back()->with(['flag' => 'success', 'message' => 'Sửa '.$req->type.' thành công!']);
    }

    public function XoaLoai(Request $req){
        $pt = ProductType::find($req->id);
        $ptname = ProductType::where('id',$req->id)->value('type');
        $pt->delete();
        return redirect()->back()->with(['flag' => 'success', 'message' => 'Xoá '.$ptname.' thành công!']);
    }

    public function AdminDSP(){
        $dsp = Catalog::leftjoin('product_type as pt', 'pt.id','=','catalogs.id_type')
            ->select('catalogs.*','pt.type','pt.id as ptid')->get();
        $pt = ProductType::pluck('type','id');
        return view('admin.page.catalog',compact('dsp','pt'));
    }

    public function ThemDong(Request $req){
        $ctl = new Catalog();

        $img = $req->catalog_image;
        if($req->hasfile('catalog_image')) {
            $name = date('Y-m-d-H-i-s') . "-" . $img->getClientOriginalName();
            $img->move('storage/product', $name);
            $ctl->catalog_image = $name;

        }
        $ctl->id_type = $req->type;
        $ctl->catalog = $req->catalog;
        $ctl->slogan = $req->slogan;

        $ctl->save();
        return redirect()->back()->with(['flag' => 'success', 'message' => 'Thêm '.$req->catalog.' thành công!']);
    }

    public function SuaDong(Request $req, $id){
        $ctl = Catalog::find($id);

        if($req->hasfile('catalog_image')) {
            Storage::delete('app/public/product/'.$ctl->catalog_image);
            unlink(storage_path('app/public/product/'.$ctl->catalog_image));

            $img = $req->catalog_image;
            $name = date('Y-m-d-H-i-s') . "-" . $img->getClientOriginalName();
            $img->move('storage/product', $name);

            $ctl->catalog_image = $name;
        }

        $ctl->id_type = $req->type;
        $ctl->catalog = $req->catalog;
        $ctl->slogan = $req->slogan;

        $ctl->save();
        return redirect()->back()->with(['flag' => 'success', 'message' => 'Sửa '.$req->type.' thành công!']);
    }

    public function XoaDong(Request $req){
        $ctl = Catalog::find($req->id);
        $ctlname = Catalog::where('id',$req->id)->value('catalog');
        $ctl->delete();
        return redirect()->back()->with(['flag' => 'success', 'message' => 'Xoá '.$ctlname.' thành công!']);
    }

    public function AdminSP(){
        $sp = Product::leftjoin('catalogs as ctl','ctl.id','=','products.id_catalog')
            ->leftjoin('product_type as pt','pt.id','=','ctl.id_type')
            ->leftjoin('product_color as pc','pc.id_product','=','products.id')
            ->leftjoin('product_image as pi','pi.id_color','=','pc.id')
            ->leftjoin('promotions as promo','promo.id','=','products.id_promo')
            ->select('products.*','promo.percent','ctl.catalog','pt.type','pc.color','pi.image')
            ->groupBy('products.id')
            ->get();
//        $grsp = $sp->groupBy('products.id');
//dd($sp);
        return view('admin.page.product',compact('sp'));
    }

    public function AdminDonHang(){
        return view('admin.page.bill');
    }

    public function AdminKhachHang(){
        return view('admin.page.customer');
    }

    public function AdminDanhGia(){
        return view('admin.page.feedback');
    }
}
