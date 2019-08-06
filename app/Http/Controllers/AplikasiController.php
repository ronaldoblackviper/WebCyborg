<?php

namespace App\Http\Controllers;
use App\Product;
use Storage;
use File;

use Illuminate\Http\Request;

class AplikasiController extends Controller
{
    public function aplikasi_index(Request $request){
        if($request->has('cari')){
            $data_aplikasi = \App\Product::where('nama','LIKE','%'.$request->cari.'%')->get();
        }
        else{
            $data_aplikasi = \App\Product::all();
        }
        return view('admin.aplikasi.aplikasi_index',["data_aplikasi"=> $data_aplikasi]);
    }

    public function delete($id){
        $aplikasi = \App\Product::find($id);
        $aplikasi->delete($id);
        return redirect('/aplikasi');
    }

    public function edit($id){
        $aplikasi = \App\Product::find($id);
        return view('admin.aplikasi.edit',['aplikasi' => $aplikasi]);
    }

    public function update(Request $request,$id){
        $aplikasi = \App\Product::find($id);
        // $aplikasi -> update($request->all());
        
        $cover = $request->file('imagePath');
        if($cover != ""){
            $extension = $cover->getClientOriginalName();
            Storage::disk('uploadsimage')->put($extension,  File::get($cover));
            $aplikasi->imagePath = 'uploads/image/'.$extension;
        }
        $cover1 = $request->file('docPath');
        if($cover1 != ""){
            $extension1 = $cover1->getClientOriginalName();
            Storage::disk('uploadsdoc')->put($extension1,  File::get($cover1));
            $aplikasi->docPath = 'uploads/document/'.$extension1;
        }

        $aplikasi->title = $request->title;
        $aplikasi->description = $request->description;
        $aplikasi->price = $request->price;
        $aplikasi->update();

        return redirect('/aplikasi');
    }

    public function create(Request $request){
    //    \App\Product::create($request->all());
        $this->validate($request, [
            'imagePath' => 'required|file',
            'docPath' => 'required|file',
            'title' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);
        $cover = $request->file('imagePath');
        $extension = $cover->getClientOriginalName();
        Storage::disk('uploadsimage')->put($extension,  File::get($cover));
        $cover1 = $request->file('docPath');
        $extension1 = $cover1->getClientOriginalName();
        Storage::disk('uploadsdoc')->put($extension1,  File::get($cover1));

        $products = new Product();
        $products->imagePath = 'uploads/image/'.$extension;
        $products->docPath = 'uploads/document/'.$extension1;
        $products->title = $request->title;
        $products->description = $request->description;
        $products->price = $request->price;
        $products->save();

        return redirect('/aplikasi');

    }
}
