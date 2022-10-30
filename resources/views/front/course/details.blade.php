@extends('front.master')
@section('title')
    Course Details
@endsection
@section('body')
  <section class="py-5">
      <div class="container">

              <div class="row">
                  <div class="col-md-4 mt-3 ">
                      <img src="{{asset($course->image)}}" alt="" style="height: 350px;width: 350PX">
                  </div>
                  <div class="col-md-8 mt-3">
                      <h4 class="text-primary">{{$course->title}}</h4>
                      <div class="text-danger mt-3" >
                         <p class="text-bg-success"> {!! $course->short_description !!}</p>
                      </div>

                  </div>

              </div>
          <div class="row mt-4">
              <div class=" col-md-4">
                  <h3>Course At a Glance</h3>
                  <p>{!! $course->long_description !!}</p>
              </div>
              <div class="col-md-4">

                  <h3 class="text-info">Course Price :{{$course->price }} BDT</h3>
                  <h4>(Including VAT & TAX)</h4>

              </div>

              <div class="col-md-4">
                  <a href="{{route('enroll-request',['id'=>$course->id])}}" class="btn btn-outline-primary float-end mt-3 {{$enroll_status == 1 ? 'disabled' : ''}} " >Enroll now</a>
              </div>

          </div>

      </div>
  </section>
@endsection
