<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AdminLogin extends Controller
{
    public function randomPassword() {
        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }
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
            'password' => $request->password, 'role' => 'admin'])) {
            return redirect()->route('adminthongke')->with(['flag' => 'success', 'message' => 'Đăng nhập thành công']);
        }
        if (Auth::attempt(['email' => $request->email,
            'password' => $request->password, 'role' => 'customer'])) {
            return redirect()->route('index');
        }
        else{
            return redirect()->back()->with(['flag' => 'danger', 'message' => 'Đăng nhập thất bại']);
        }
    }

    public function quenMK(){
        return view('admin.page.forgot_password');
    }

    public function postQuenMK(Request $req){
        $email = $req->email;
        $user = User::where('email',$email)->first();
        if($user){
            if($user->role == 'admin'){
                $newpass = $this->randomPassword();
                $user->password = Hash::make($newpass);
                $user->save();

                $data = ['password' => $newpass, 'email' => $email];
                Mail::send('admin.mail.adminreset',$data,function ($msg) use ($email){
                    $msg->from('ngvantai.n8@gmail.com','itamloan.vn');
                    $msg->to($email,'Admin i Tâm Loan')->subject('🍎🍎 Khôi phục mật khẩu thành công ✅');
                });
                if (Mail::failures()) {}
                return redirect()->route('adminlogin')->with(['flag' => 'success', 'message' => 'Đổi mật khẩu thành công. Mời bạn kiểm tra email để đăng nhập']);
            }
            else{
                return redirect()->back()->with(['flag' => 'danger', 'message' => 'Sai địa chỉ email của Admin']);
            }

        }else{
            return redirect()->back()->with(['flag' => 'danger', 'message' => 'Không tồn tại email này trên hệ thống']);
        }
    }

    public function logout()
    {
        if(Auth()->user()->role == 'admin'){
            Auth()->logout();
            return redirect()->route('adminlogin')->with(['flag' => 'success', 'message' => 'Đăng xuất thành công']);
        }else{
            Auth()->logout();
            return redirect()->route('index');
        }
    }
}
