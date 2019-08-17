@extends ('admin.layout.master')

@section ('content')

<div class="page-container">
             <!-- MAIN CONTENT-->
    
    <div class="main">
        <div class="main-content">
            <div class="container fluid">
                <div class="row">
                    <div class="col-12">
                        <h1>Edit Data </h1>
                            <div class="col lg-12">
                                <form action="/user/{{$users->id}}/update" method="POST">

                                    {{csrf_field()}} <!-- field token -->

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama</label>
                                        <input name="name" type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Nama"
                                        value="{{$users -> name}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Email</label>
                                        <input name="email" type="text" class="form-control" id="email" placeholder="Email"
                                        value="{{$users->email}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input name="password" type="text" class="form-control" id="password" placeholder="Password"
                                        value="{{$users->password}}">
                                    </div>

                                    <button type="button" class="btn btn-warning"><a href="/user">Close</a></button>
                                    <button type="submit" class="btn btn-primary">Update</button>
                            </div>  
                    
                        
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
                 >
</div>
 


    
    @endsection

