@extends ('layout.master')

@section ('content')

<div class="page-container">
             <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p20">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="title-1 m-b-50">Data User</h2> 
                    </div> 

    <div class="main">
        <div class="main-content">
            <div class="container fluid">
                <div class="row">
                    <div class="col-12">
                        <h1>Edit Data </h1>
                            <div class="col lg-12">
                                <form action="/user/{{$user->id}}/update" method="POST">

                                    {{csrf_field()}} <!-- field token -->

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama</label>
                                        <input name="nama" type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Nama"
                                        value="{{$user -> nama}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Email</label>
                                        <input name="email" type="text" class="form-control" id="email" placeholder="Email"
                                        value="{{$user->email}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input name="password" type="text" class="form-control" id="password" placeholder="Password"
                                        value="{{$user->password}}">
                                    </div>

                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input name="alamat" type="text" class="form-control" id="alamat" placeholder="alamat"
                                        value="{{$user->alamat}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Kontak</label>
                                        <input name="no_hp" type="text" class="form-control" id="no_hp" placeholder="kontak"
                                        value="{{$user->no_hp}}">
                                    </div>
                                    
                            </div>  
                    
                        <button type="button" class="btn btn-secondary"><a href="/user">Close</a></button>
                        <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
                 </div>
            </div>
        </div>
    </div>
</div>
 


    
    @endsection

