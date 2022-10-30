@extends('admin.master')
@section('title')
    Manage Enrolled students
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3>Manage Courses</h3>
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
                                    <td>Action</td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($enrolls as $enroll)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$enroll->course->title}}</td>
                                        <td>{{$enroll->course->price}}BDT</td>
                                        <td>{{\Illuminate\Support\Carbon::parse( $enroll->course->starting_date)->format('d-m-Y')}}</td>
                                        <td>{{$enroll->teacher->name}}</td>
                                        <td>{{$enroll->user->name}}</td>

                                        <td>{{$enroll->payment_status}}</td>

                                        <td>

                                            <a href="{{route('change-enroll-status',['id'=>$enroll->id])}}"class="btn  btn-sm  {{$enroll->payment_status == 'complete'? 'disabled' : 'btn-warning'}}">Status</a>

{{--                                            <a href="{{route('courses.edit',$enroll->course->id)}}" class="btn btn-sm btn-primary">edit</a>--}}
{{--                                            <form action="{{route('delete-enroll',['id'=>$enroll->id])}}"  method="post">--}}
{{--                                                @csrf--}}
{{--                                                @method('delete')--}}
{{--                                                <input type="submit" class="bx bx-trash" value="delete"/>--}}
{{--                                            </form>--}}
                                            @if($enroll->payment_status == 'pending')
                                            <a href="{{route('delete-enroll',['id'=>$enroll->id])}}" class="btn btn-danger btn-sm"><i class="bx bx-trash"></i></a>
                                            @endif
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
    </section>
@endsection

