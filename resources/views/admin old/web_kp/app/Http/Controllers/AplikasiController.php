<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AplikasiController extends Controller
{
    public function aplikasi_index(Request $request){
        if($request->has('cari')){
            $data_aplikasi = \App\Aplikasi::where('nama','LIKE','%'.$request->cari.'%')->get();
        }
        else{
            $data_aplikasi = \App\Aplikasi::all();
        }
        return view('aplikasi.aplikasi_index',["data_aplikasi"=> $data_aplikasi]);
    }

    public function delete($id){
        $aplikasi = \App\Aplikasi::find($id);
        $aplikasi->delete($id);
        return redirect('/aplikasi');
    }

    public function edit($id){
        $aplikasi = \App\Aplikasi::find($id);
        return view('aplikasi.edit',['aplikasi' => $aplikasi]);
    }

    public function update(Request $request,$id){
        $aplikasi = \App\Aplikasi::find($id);
        $aplikasi->update($request->all());
        return redirect('/aplikasi');
    }

    public function create(Request $request){
       \App\Aplikasi::create($request->all());
        return redirect('\aplikasi');

    }

   
}
