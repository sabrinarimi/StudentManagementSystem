@extends('front.master')
@section('title')
    All Courses
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center">All Courses</h3>
                </div>
            </div>
            <div class="row mt-3">
                @foreach($courses as $course)
                    <div class="col-md-4">
                        <a href="{{route('course-details',['id'=>$course->id,'title'=>str_replace('','-',$course->title)])}}" class="nav-link">
                            <div class="card">
                                <img src="{{$course->image}}" class="card-img-top" alt="" style="height: 250px">
                                <div class="card-body">
                                    <h5 class="card-title">{{$course->title}}</h5>
                                    <p class="card-text">Starts from-{{\Illuminate\Support\Carbon::parse($course->starting_date)->format('d m Y')}}</p>
                                    <a href="" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </a>

                    </div>
                @endforeach
                <div class="col-12">
                    <div class="align-content-center">
                        {{$courses->links()}}
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

