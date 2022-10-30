<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TeacherController extends Controller
{
    private $teacher,$user;
    private $teachers;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.teachers.index',[
           'teachers'=>Teacher::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|unique:users',
            'phone'=>'required',
            'address'=>'required',
            'description'=>'required',
            'image'=>'required|image',
            'status'=>'required',

        ],[
            'image.image'=>'File format is not supported.Please insert an image',
            'image.required'=>'Please upload teachers image',
        ]);




       $this->user= User::createTeachersAccount($request);
      $this->teacher= Teacher::createOrUpdateTeachersAccount($request,$this->user->id);

      $data=[
          'user'=>$this->user,
          'teacher'=>$this->teacher
      ];
        Mail::send('admin.teachers.mail',$data,function ($message)use ($data){
            $message->to($data['user']->email, $data['user']->name)->subject("teachers's account Information ");
        });


        return redirect()->back()->with('success','Teacher created successfully');
    }

    /**vied resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.teachers.edit',[
            'teacher'=>Teacher::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->teacher = Teacher::find($id);
        $this->user=User::updateTeacher($request,$this->teacher->user_id);
        Teacher::createOrUpdateTeachersAccount($request,$this->teacher->user_id,$id);
        return redirect('/teachers')->with('success','Teacher updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->teacher=Teacher::find($id);
        $this->user =User::find($this->teacher->user_id);
        $this->user->delete();
        if (file_exists($this->teacher->image))
        {
            unlink($this->teacher->image);
        }
        $this->teacher->delete();
        return redirect()->back()->with('success','Teacher deleted succesfully');
    }
}
