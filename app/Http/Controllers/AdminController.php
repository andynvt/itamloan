<?php

namespace App\Http\Controllers;

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
        return view('admin.page.product_type');
    }

    public function AdminDSP(){
        return view('admin.page.catalog');
    }

    public function AdminSP(){
        return view('admin.page.product');
    }
}
