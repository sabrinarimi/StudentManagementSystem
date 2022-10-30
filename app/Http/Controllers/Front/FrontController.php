<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Enroll;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        return view('front.home.home',[
            'courses'=>Course::where('status',1)->latest()->take(6)->get(),
        ]);
    }
    public function courseDetails($id,$title=null)
    {
        $enroll =Enroll::where('course_id',$id)->where('user_id',auth()->id())->first();
        return view('front.course.details',[
            'course'=>Course::find($id),
            'enroll_status'=>!empty($enroll) ? 1 :0
        ]);
    }
    public function allCourses()
    {
        return view('front.course.all-courses', [
            'courses' => Course::where('status', 1)->latest()->paginate(2),
        ]);
    }

    public function enrollRequest($id)
    {
        if (auth()->check()){
            if (auth()->user()->role== 0)
            {
                return view('front.order.order',[
                    'course'=>Course::find($id)
                ]);
            }
            else
            {
                return redirect()->back()->with('error','you are not a student');
            }


        }
        else{
            return  redirect()->route('login');
        }
    }
    public function myOrder($id)
    {

        return view('front.order.myOrder',[
            'myOrders'=>Enroll::where('user_id',$id)->get()
        ]);
    }
    public function deleteOrder($id)
    {

        Enroll::find($id)->delete();
        return redirect()->back()->with('success','Order deleted successfully  ');

    }


}
