@extends('admin.master')
@section('title')
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3>Manage Teacher</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive " id="table">
                                <thead>
                                <tr>
                                    <td>#</td>
                                    <td>Name</td>
                                    <td>Email</td>
                                    <td>Phone</td>
                                    <td>Address</td>
                                    <td>Description</td>
                                    <td>Status</td>
                                    <td>Image</td>
                                    <td>Action</td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($teachers as $teacher)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$teacher->user->name}}</td>
                                    <td>{{$teacher->user->email}}</td>
                                    <td>{{$teacher->phone}}</td>
                                    <td>{{$teacher->address}}</td>
                                    <td>{{$teacher->description}}</td>
                                    <td>{{$teacher->status == 1 ? 'Active' : 'Inactive'}}</td>

                                    <td>
                                        <img src="{{asset($teacher->image)}}" alt="" style="height: 80px;width: 80px">

                                    </td>

                                    <td>
                                        <a href="{{route('teachers.edit',$teacher->id)}}" class="btn btn-sm btn-primary">edit</a>
                                        <form action="{{route('teachers.destroy',$teacher->id)}}"  method="post">
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
