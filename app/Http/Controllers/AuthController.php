<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('admin.auth.login');
    }

    public function postlogin(Request $request){
        if($request->input('email') == 'cyborgitweb@gmail.com' && $request->input('password') == 'Cyb0rgW3b') {
            // \Session::put('adminUser',$user);
            return redirect()->route('dashboard.admin');
        }else{
            if(Auth::attempt($request->only('email','password'))){
                return redirect()->route('login.admin')->with('alert', 'Anda Bukan Admin!!!');
            }
            return redirect()->route('login.admin')->with('alert', 'Akun anda tidak terdaftar!');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login.admin');
    }
}
