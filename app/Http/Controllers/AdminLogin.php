<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminLogin extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('guest:admin', ['except' => ['logout']]);
//    }
//    public function __construct()
//    {
//        $this->middleware('AdminLogin');
//    }

    public function redirectAdmin(){
        return redirect()->route('adminlogin');
    }

    public function showLoginForm()
    {
        return view('admin.page.login');
    }

    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email,
            'password' => $request->password])) {
            // if successful, then redirect to their intended location
            return redirect()->route('adminthongke');
        }
        else{
            return redirect()->back();
        }
        // if unsuccessful, then redirect back to the login with the form data
//        return redirect()->back();
    }

    public function quenMK(){
        return view('admin.page.forgot_password');
    }


    public function logout()
    {
//        Auth::guard('admin')->logout();
//        return redirect('/admin');
    }
}
