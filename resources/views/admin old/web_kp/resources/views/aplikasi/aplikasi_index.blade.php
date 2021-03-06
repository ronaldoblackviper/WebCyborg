@extends('layout.master')
@section('content')

<div class="page-container">
             <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p10">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="title-1 m-b-10">Data Aplikasi</h2> 

                                    <div class="noti__item js-item-menu">
                                        <i class="fa fa-plus-square"></i>
                                            
                                        <div class="mess-dropdown js-dropdown">

                                            <div class="mess__title">
                                               <h3>Tambah Data</h3>
                                            </div>

                                            <div class="mess__item">
                                                <form action="/aplikasi/create" method="POST" enctype="multipart/form-data">
                                                    {{csrf_field()}} <!-- field token -->

                                                    <div class="form-group{{$errors->has('image') ? 'has-error' : ''}}">
                                                        <label for="exampleInputEmail1">Image</label>
                                                        <input name="image" type="text" class="form-control" id="image" aria-describedby="emailHelp" placeholder="image" value="{{old('image')}}">
                                                        @if($errors->has('imagePath'))
                                                            <span class="help-block">{{$errors->first('imagePath')}}</span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group{{$errors->has('title') ? 'has-error' : ''}}">
                                                        <label for="exampleInputEmail1">Title</label>
                                                        <input name="nama" type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="title" value="{{old('title')}}">
                                                        @if($errors->has('title'))
                                                            <span class="help-block">{{$errors->first('title')}}</span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group{{$errors->has('description') ? 'has-error' : ''}}">
                                                        <label for="exampleInputEmail1">description</label>
                                                        <input name="description" type="text" class="form-control" id="description" aria-describedby="emailHelp" placeholder="description" value="{{old('description')}}">
                                                        @if($errors->has('description'))
                                                            <span class="help-block">{{$errors->first('description')}}</span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group{{$errors->has('price') ? 'has-error' : ''}}">
                                                        <label for="exampleInputEmail1">price</label>
                                                        <input name="price" type="text" class="form-control" id="price" aria-describedby="emailHelp" placeholder="price" value="{{old('price')}}">
                                                        @if($errors->has('price'))
                                                            <span class="help-block">{{$errors->first('price')}}</span>
                                                        @endif
                                                    </div>
                                                    <button type="button" class="btn btn-warning" data-dismiss=""> <a href="/aplikasi"> Close </a> </button>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                
                                                </form>
                                                
                                            </div>  
                                        </div>
                                    </div>
                    </div> 
<table class="table table-hover">

<thead>
     <tr>
        <th>Image</th>
        <th>Title</th>
        <th>Description</th>
        <th>Price</th>
    </tr>
</thead>
                            
<tbody>
     @foreach($data_aplikasi as $aplikasi)
        <tr>
            <td>{{$aplikasi -> imagePath}}</td>
            <td>{{$aplikasi -> title}}</td>
            <td>{{$aplikasi -> description}}</td>
            <td>{{$aplikasi -> price}}</td>

            <td>
                <a href="/aplikasi/{{$aplikasi->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                <a href="/aplikasi/{{$aplikasi->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Hapus Data ?')">Delete</a>
            </td>
        </tr>
    @endforeach
</tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</div> 
<script>
    document.getElementById("caridasboard").style.display="none";
</script>

@stop