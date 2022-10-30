@extends('front.master')
@section('title')
    Enroll-Here
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                  <table class="table-responsive table">
                     <thead>
                         <tr>
                             <th>Course Name</th>
                             <th>Price</th>
                             <th>Starting Date</th>
                         </tr>
                     </thead>
                      <tbody>
                            <tr>
                                <td>{{$course->title}}</td>
                                <td>{{$course->price}}</td>
                                <td>{!! \Illuminate\Support\Carbon::parse($course->starting_date)->format('d m Y') !!}</td>
                            </tr>
                      </tbody>
                  </table>
                    <div class="col-md-6">
                        <div class="mt-4">

                            <form action="{{route('place-order')}}" method="post">
                                @csrf
                                <input type="hidden" name="course_id" value="{{$course->id}}">
                                <div>
                                    <h3>Payment Method</h3>
                                </div>
                                <div >
                                    <label for=""><input type="radio" name="payment_method" value="1" checked/>Cash</label>
                                    <label for=""><input type="radio" name="payment_method" value="2" />SSl Commerce</label>
                                </div >
                                <div class="mt-4">
                                    <input type="submit" class="btn btn-success" value="Place Order">
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
