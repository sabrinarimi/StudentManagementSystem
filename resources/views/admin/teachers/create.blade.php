@extends('admin.master')
@section('title')
    add teacher
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto" style="border: 1px solid lightgrey">
                    <div class="card">
                        <div class="card-header">
                            <h3>Add Teacher</h3>
                        </div>
                        <div class="card-body">
                            <ul class="text-danger">
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>


                            <form action="{{route('teachers.store')}}" method="post" enctype="multipart/form-data">
                               @csrf
                                <div class="form-group row">

                                    <label for="" class="col-md-4">Name</label>

                                    <div class="col-md-8">
                                        <input type="text" name="name" class="form-control"/>
                                        @error('name')<span class="text-danger">{{$errors->first('name')}}</span>@enderror

                                    </div>
                                </div>

                                <div class="form-group row">

                                    <label for="" class="col-md-4">Email</label>

                                    <div class="col-md-8">
                                        <input type="email" name="email" class="form-control"/>
                                        @error('name')<span class="text-danger">{{$errors->first('email')}}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <label for="" class="col-md-4">Phone</label>

                                    <div class="col-md-8">
                                        <input type="text" name="phone" class="form-control"/>
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <label for="" class="col-md-4">Address</label>
                                    <div class="col-md-8">
                                        <textarea name="address" id="" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <label for="" class="col-md-4">Description</label>
                                    <div class="col-md-8">
                                        <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <label for="" class="col-md-4">Image</label>

                                    <div class="col-md-8">
                                        <input type="file" name="image" class="form-control-file"/>
                                    </div>
                                </div>

                                <div class="form-group row ">

                                    <label for="" class="col-md-4">Status</label>

                                    <div class="col-md-8">
                                        <label for=""><input type="radio" checked name="status" value="1">Active</label>
                                        <label for=""><input type="radio" name="status" value="0">Inactive</label>
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <label for="" class="col-md-4"></label>

                                    <div class="col-md-8">
                                        <input type="submit"  class="btn btn-success" value="Create Teacher"/>
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
