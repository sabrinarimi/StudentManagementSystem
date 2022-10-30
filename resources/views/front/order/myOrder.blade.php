@extends('front.master')
@section('title')
    My Orders
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3>My Orders</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive " id="table">
                                <thead>
                                <tr>
                                    <td>#</td>
                                    <td>Course Title</td>
                                    <td>Price</td>
                                    <td>Starting Date</td>
                                    <td>Published By</td>
                                    <td>Student Name</td>
                                    <td>PaymentStatus</td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($myOrders as $myOrder)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$myOrder->course->title}}</td>
                                        <td>{{$myOrder->course->price}}BDT</td>
                                        <td>{{\Illuminate\Support\Carbon::parse( $myOrder->course->starting_date)->format('d-m-Y')}}</td>
                                        <td>{{$myOrder->teacher->name}}</td>
                                        <td>{{$myOrder->user->name}}</td>
                                        <td>{{$myOrder->payment_status}}</td>


                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


