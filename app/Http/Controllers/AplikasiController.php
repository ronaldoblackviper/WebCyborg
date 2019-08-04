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
        $aplikasi -> update($request->all());
        // $this->validate($request, [
        //     'imagePath' => 'required|file|max:2000',
        //     'title' => 'required',
        //     'description' => 'required',
        //     'price' => 'required'
        // ]);
        // $cover = $request->file('imagePath');
        // $extension = $cover->getClientOriginalExtension();
        // Storage::disk('uploads')->put($cover->getFilename().'.'.$extension,  File::get($cover));

        // $aplikasi->imagePath = 'uploads/'.$cover->getFilename().'.'.$extension;
        // $aplikasi->title = $request->title;
        // $aplikasi->description = $request->description;
        // $aplikasi->price = $request->price;
        // // 'imagePath' => $request->input('imagePath'),
        // // 'title' => $request->input('title'),
        // // 'description' => $request->input('description'),
        // // 'price' => $request->input('price')
        // // $products->save();
        // $aplikasi->update();
        return redirect('/aplikasi');
    }

    public function create(Request $request){
    //    \App\Product::create($request->all());
        $this->validate($request, [
            'imagePath' => 'required|file',
            'title' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);
        $cover = $request->file('imagePath');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('uploads')->put($cover->getFilename().'.'.$extension,  File::get($cover));

        $products = new Product();
        $products->imagePath = 'uploads/'.$cover->getFilename().'.'.$extension;
        $products->title = $request->title;
        $products->description = $request->description;
        $products->price = $request->price;
        // 'imagePath' => $request->input('imagePath'),
        // 'title' => $request->input('title'),
        // 'description' => $request->input('description'),
        // 'price' => $request->input('price')
        $products->save();

        return redirect('/aplikasi');

    }
}
