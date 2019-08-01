<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
Use Session;
use App\Http\Requests;

class UserController extends Controller
{
    public function getSignup(){
        return view('user.signup');
    }
    public function postSignup(Request $request){
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'email|required|unique:users',
            'password' => 'required|min:6'
        ]);

        $users = new User([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);

        $users->save();

        Auth::login($users);
        if(Session::has('oldUrl')){
            $oldUrl = Session::get('oldUrl');
            Session::forget('oldUrl');
            return redirect()->to($oldUrl);
        }

        return redirect()->route('user.profile');
    }

    public function getLogin(){
        return view('user.login');
    }
    public function postLogin(Request $request){
        $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required|min:6'
        ]);

        if(Auth::attempt(['email' => $request->input('email'),'password' => $request->input('password')])){
            if(Session::has('oldUrl')){
                $oldUrl = Session::get('oldUrl');
                Session::forget('oldUrl');
                return redirect()->to($oldUrl);
            }
            return redirect()->route('user.profile');
        }

        return redirect()->back();
    }

    public function getProfile(){
        $orders = Auth::user()->orders;
        $orders->transform(function($order, $key){
            $order->cart = unserialize($order->cart);
            return $order;
        });
        return view('user.profile', ['orders' => $orders]);
    }
    
    public function getLogout(){
        Auth::logout();
        return redirect()->route('user.login');
    }
}
