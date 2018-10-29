<?php

namespace App\Http\Controllers;

use App\ProductType;
use Illuminate\Http\Request;

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

//        dd($kq);
        $pt = ProductType::find($id);
        $pt->type = $req->type;
        $pt->type_detail = $kq;
        $pt->save();
        return redirect()->back()->with(['flag' => 'success', 'message' => 'Sửa '.$req->type.' thành công!']);
    }

    public function AdminDSP(){
        return view('admin.page.catalog');
    }

    public function AdminSP(){
        return view('admin.page.product');
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
