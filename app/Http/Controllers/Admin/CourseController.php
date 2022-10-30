<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    private $course,$courses;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->role == 2){
            $this->courses=  Course::latest()->get();
        }
        elseif (auth()->user()->role == 1)

        {
            $this->courses=  Course::where('user_id',auth()->id())->latest()->get();
        }
        return view('admin.courses.index',[
            'courses'=>$this->courses,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Course::createCourses($request);
        return redirect()->back()->with('success','Course created successfully');
    }

    /**
     * Display the specified resource.
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
        return view('admin.courses.edit',[
            'course'=>Course::find($id)
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
        Course::updateCourse($request,$id);
        return redirect('/courses')->with('message','Course updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->course = Course::find($id);
        if (file_exists($this->course->image))
        {
            unlink($this->course->image);
        }
        $this->course->delete();
        return redirect()->back()->with('success','Course deleted successfully');

    }
    public function changeStatus($id)
    {
        $this->course = Course::find($id);
        if ($this->course->status == 1)
        {
            $this->course->status =0;
        }
        elseif ($this->course->status == 0)
        {
            $this->course->status =1;
        }
        $this->course->save();
        return redirect()->back()->with('success','Course status changed successfully');


    }
}
