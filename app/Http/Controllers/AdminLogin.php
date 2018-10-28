<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminLogin extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('guest:admincp', ['except' => ['logout']]);
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
        // Validate the form data
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        // Attempt to log the user in
        if (Auth::guard('admincp')->attempt(['email' => $request->email,
            'password' => $request->password], $request->remember)) {
            // if successful, then redirect to their intended location
            return redirect()->intended(route('adminthongke'));
        }
        // if unsuccessful, then redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout()
    {
        Auth::guard('admincp')->logout();
        return redirect('/admincp');
    }
}
