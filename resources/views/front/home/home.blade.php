@extends('front.master')
@section('title')
    front
@endsection

@section('body')
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1800">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('/')}}front/images/1.jpg" class="d-block w-100" alt="..." style="height: 600px">
            </div>
            <div class="carousel-item">
                <img src="{{asset('/')}}front/images/2.png" class="d-block w-100" alt="..."  style="height: 600px">
            </div>
            <div class="carousel-item">
                <img src="{{asset('/')}}front/images/4.jpg" class="d-block w-100" alt="..."  style="height: 600px">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center">Latest Courses</h3>
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
            </div>

        </div>
    </section>
@endsection

