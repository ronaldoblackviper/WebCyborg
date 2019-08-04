<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
Use Session;
use App\Http\Requests;

class UserController extends Controller
{
    public function getAdmin(){
        return view('admin.index');
    }
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

        // }else{
            if(Auth::attempt(['email' => $request->input('email'),'password' => $request->input('password')])){
                if($request->input('email') == 'cyborgitweb@gmail.com' && $request->input('password') == 'Cyb0rgW3b') {
                    // \Session::put('adminUser',$user); 
                    return redirect()->route('dashboard.admin');
                }
                if(Session::has('oldUrl')){
                    $oldUrl = Session::get('oldUrl');
                    Session::forget('oldUrl');
                    return redirect()->to($oldUrl);
                }
                return redirect()->route('user.profile');
            }
            return redirect()->back()->with('alert', 'Email atau Password anda salah!!!');;
            // if(Auth::attempt($request->only('email','password'))){
            //     return redirect()->route('login.admin')->with('alert', 'Anda Bukan Admin!!!');
            // }
            // return redirect()->route('login.admin')->with('alert', 'Akun anda tidak terdaftar!');
        // }
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

    public function user_index(Request $request){

        if($request->has('cari')){
            $data_user = \App\User::where('email','LIKE','%'.$request->cari.'%')->get();
        }
        else{
            $data_user = \App\User::all();
        }
        return view('admin.user.user_index',["data_user"=> $data_user]);
    }
    public function edit($id){
        $users = \App\User::find($id);
        return view('admin.user.edit',['users' => $users]);
    }
 
    public function update(Request $request,$id){
        $users = \App\User::find($id);
        $users->update($request->all());
        
        return redirect('/user');
    }

    public function delete($id){
        $aplikasi = \App\User::find($id);
        $aplikasi->delete($id);
        return redirect('/user');
    }
}
