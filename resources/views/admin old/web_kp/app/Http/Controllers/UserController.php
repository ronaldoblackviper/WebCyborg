<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user_index(Request $request){

        if($request->has('cari')){
            $data_user = \App\User::where('email','LIKE','%'.$request->cari.'%')->get();
        }
        else{
            $data_user = \App\User::all();
        }
        return view('user.user_index',["data_user"=> $data_user]);
    }
    public function edit($id){
        $users = \App\User::find($id);
        return view('user.edit',['user' => $users]);
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
