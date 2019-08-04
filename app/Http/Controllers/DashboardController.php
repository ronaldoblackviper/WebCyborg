<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard_index(Request $request){
    
        if($request->has('cari')){
            $data_orders = \App\Order::where('name','LIKE','%'.$request->cari.'%')->get();
        }
        else{
            $data_orders = \App\Order::all();
    }
    return view('admin.dashboard.dashboard_index',["data_orders"=> $data_orders]);
    }
}
