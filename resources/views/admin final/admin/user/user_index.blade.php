@extends('admin.layout.master')
@section('content')


<div class="page-container">
             <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p10">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="title-1 m-b-10">Data User</h2> 
                    </div> 
                        <div class="panel-body">
					        <table class="table table-hover">
						        <thead>        
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        
                                        <th class="text-right">aksi</th>
                                    </tr>
						        </thead>
	                                <tbody>
                                        @foreach($data_user as $users)
                                            <tr>
                                                <td>{{$users -> id}}</td>
                                                <td>{{$users -> name}}</td>
                                                <td>{{$users -> email}}</td>
                                                <td>{{$users -> password}}</td>
                                                
                                                <td>
                                                    <a href="/user/{{$users->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                                    <a href="/user/{{$users->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Hapus Data ?')">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
					        </table>
                        </div>
                </div>
             </div>

    <script>
        document.getElementById("caridasboard").style.display="none";
    </script>

@stop
