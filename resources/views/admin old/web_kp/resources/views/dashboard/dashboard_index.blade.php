@extends('layout.master')
@section('content')

  
        <div class="page-container">
             <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p20">
                    <div class="container-fluid">
                    
                        <div class="row">
                            <div class="col-lg-9">
                                <h2 class="title-1 m-b-25">Data Penjualan</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>User ID</th>
                                                <th>Name</th>
                                                <th>Cart</th>
                                                <th>Address</th>
                                                <th>Payment_id</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($data_orders as $data_orders)
                                            <tr>
                                                <td>{{$data_orders -> user_id}}</td>
                                                <td>{{$data_orders -> name}}</td>
                                                <td>{{$data_orders -> cart}}</td>
                                                <td>{{$data_orders -> address}}</td>
                                                <td>{{$data_orders -> payment_id}}</td>
                                            </tr>
                                        @endforeach
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                           
                       
                </div>
            </div>
        </div>

@stop