@extends ('layout.master')

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
                    <form action="/aplikasi/{{$aplikasi->id}}/update" method="POST">

                    {{csrf_field()}} <!-- field token -->

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input name="nama" type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Nama"
                        value="{{$aplikasi -> nama}}">
                    </div>
                    <button type="button" class="btn btn-secondary"><a href="/aplikasi">Close</a></button>
                        <button type="submit" class="btn btn-primary">Update</button> 
                    </div>  
                </div>
            </div>
                
        </div>
            
    </div>  
</div>
</div>



    
    @endsection

