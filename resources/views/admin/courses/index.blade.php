@extends('admin.master')
@section('title')
    Manage Courses
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
                                    <td>Short Description</td>
                                    <td>Long Description</td>

                                    <td>Image</td>
                                    <td>Status</td>
                                    <td>Action</td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($courses as $course)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$course->title}}</td>
                                        <td>{{$course->price}}BDT</td>
                                        <td>{{\Illuminate\Support\Carbon::parse( $course->starting_date)->format('d-m-Y')}}</td>
                                        <td>{{$course->user->name}}</td>
                                        <td>{{$course->short_description}}</td>
                                        <td>{!!\Illuminate\Support\Str::words($course->long_description,20,'...')!!}</td>


                                        <td>
                                            <img src="{{asset($course->image)}}" alt="" style="height: 80px">

                                        </td>
                                        <td>{{$course->status == 1 ? 'Active' : 'Inactive'}}</td>

                                        <td>
                                            
                                            @if(auth()->user()->role == 2)
                                            <a href="{{route('change-course-status',['id'=>$course->id])}}"class="btn  btn-sm {{$course->status == 0? 'btn-warning' : 'btn-success'}}">Status</a>
                                            @endif


                                            <a href="{{route('courses.edit',$course->id)}}" class="btn btn-sm btn-primary">edit</a>
                                            <form action="{{route('courses.destroy',$course->id)}}"  method="post">
                                                @csrf
                                                @method('delete')
                                                <input type="submit" class="btn-sm" value="delete"/>
                                            </form>


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

