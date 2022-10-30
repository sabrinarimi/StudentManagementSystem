@extends('admin.master')
@section('title')
    Edit teacher
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto" style="border: 1px solid lightgrey">
                    <div class="card">
                        <div class="card-header">
                            <h3>Edit Teacher</h3>
                        </div>
                        <div class="card-body">
{{--                            <ul class="text-danger">--}}
{{--                                @foreach($errors->all() as $error)--}}
{{--                                    <li>{{$error}}</li>--}}
{{--                                @endforeach--}}
{{--                            </ul>--}}


                            <form action="{{route('teachers.update',$teacher->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="form-group row">

                                    <label for="" class="col-md-4">Name</label>

                                    <div class="col-md-8">
                                        <input type="text" name="name" value="{{$teacher->user->name}}" class="form-control"/>
                                        @error('name')<span class="text-danger">{{$errors->first('name')}}</span>@enderror

                                    </div>
                                </div>

                                <div class="form-group row">

                                    <label for="" class="col-md-4">Email</label>

                                    <div class="col-md-8">
                                        <input type="email" name="email" value="{{$teacher->user->email}}" class="form-control"/>
                                        @error('name')<span class="text-danger">{{$errors->first('email')}}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <label for="" class="col-md-4">Phone</label>

                                    <div class="col-md-8">
                                        <input type="text" value="{{$teacher->phone}}"  name="phone" class="form-control"/>
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <label for="" class="col-md-4">Address</label>
                                    <div class="col-md-8">
                                        <textarea name="address" id="" cols="30" rows="10" class="form-control">{{$teacher->address}} </textarea>
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <label for="" class="col-md-4">Description</label>
                                    <div class="col-md-8">
                                        <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{$teacher->description}} </textarea>
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <label for="" class="col-md-4">Image</label>

                                    <div class="col-md-8">
                                        <input type="file" name="image" class="form-control-file"/>
                                        <img src="{{asset($teacher->image)}} " class="mt-2" alt="" style="height: 80px" width="80px">
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <label for="" class="col-md-4">Status</label>

                                    <div class="col-md-8">
                                        <label for=""><input type="radio" {{$teacher->status == 1 ? 'checked' : ''}} checked name="status" value="1">Active</label>
                                        <label for=""><input type="radio" {{$teacher->status == 0 ? 'checked' : ''}} name="status" value="0">Inactive</label>
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <label for="" class="col-md-4"></label>

                                    <div class="col-md-8">
                                        <input type="submit"  class="btn btn-success" value="Edit Teacher"/>
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
