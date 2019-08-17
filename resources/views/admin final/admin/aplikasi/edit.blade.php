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
                    <form action="/aplikasi/{{$aplikasi->id}}/update" method="POST" enctype="multipart/form-data">

                    {{csrf_field()}} <!-- field token -->

                    <div class="form-group">
                        <label for="exampleInputEmail1">Image</label>
                        <input name="imagePath" type="file" class="form-control" id="imagePath" aria-describedby="emailHelp" placeholder="Image"
                        value="{{$aplikasi -> imagePath}}">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Document</label>
                        <input name="docPath" type="file" class="form-control" id="docPath" aria-describedby="emailHelp" placeholder="Document"
                        value="{{$aplikasi -> docPath}}">
                    </div>

                    <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input name="title" type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Title"
                            value="{{$aplikasi -> title}}">
                    </div>

                    <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <input name="description" type="text" class="form-control" id="description" aria-describedby="emailHelp" placeholder="Description"
                                value="{{$aplikasi -> description}}">
                    </div>

                    <div class="form-group">
                            <label for="exampleInputEmail1">Price</label>
                            <input name="price" type="text" class="form-control" id="price" aria-describedby="emailHelp" placeholder="price"
                            value="{{$aplikasi -> price}}">
                    </div>
                    <button type="button" class="btn btn-warning"><a href="/aplikasi">Close</a></button>
                    <button id="update" name="update" type="submit" class="btn btn-primary">Update</button> 
                    </div>  
                </div>
            </div>
                
        </div>
            
    </div>
</div>
</div>



    
    @endsection

