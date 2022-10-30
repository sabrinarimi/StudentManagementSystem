@extends('admin.master')
@section('title')
    add Couses
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto" style="border: 1px solid lightgrey">
                    <div class="card">
                        <div class="card-header">
                            <h3>Add Course</h3>
                        </div>
                        <div class="card-body">
{{--                            <ul class="text-danger">--}}
{{--                                @foreach($errors->all() as $error)--}}
{{--                                    <li>{{$error}}</li>--}}
{{--                                @endforeach--}}
{{--                            </ul>--}}


                            <form action="{{route('courses.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">

                                    <label for="" class="col-md-4">Course Title</label>

                                    <div class="col-md-8">
                                        <input type="text" name="title" class="form-control"/>

                                    </div>
                                </div>
                                <div class="form-group row">

                                    <label for="" class="col-md-4">Course Price</label>

                                    <div class="col-md-8">
                                        <input type="text" name="price" class="form-control"/>

                                    </div>
                                </div>
                                <div class="form-group row">

                                    <label for="" class="col-md-4">Starting Date </label>

                                    <div class="col-md-8">
                                        <input type="date" name="starting_date" class="form-control"/>

                                    </div>
                                </div>

                                <div class="form-group row col-12">

                                    <label for="" class="">Short Description</label>
                                    <div class="">
                                        <textarea name="short_description" id="" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row col-12">

                                    <label for="" class="">Long Description</label>
                                    <div class="">
                                        <textarea name="long_description" id="" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <label for="" class="col-md-4">Image</label>

                                    <div class="col-md-8">
                                        <input type="file" name="image" class="form-control-file"/>
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <label for="" class="col-md-4">Status</label>

                                    <div class="col-md-8">
                                        <label for=""><input type="radio" checked name="status" value="1">Active</label>
                                        <label for=""><input type="radio" name="status" value="0">Inactive</label>
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <label for="" class="col-md-4"></label>

                                    <div class="col-md-8">
                                        <input type="submit"  class="btn btn-success" value="Create Course"/>
                                    </div>
                                </div>







                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
