<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\EnrollFormRequest;
use App\Models\Enroll;
use Illuminate\Http\Request;

class EnrollController extends Controller
{
    private $enroll;
    public function placeOrder(EnrollFormRequest $request)
    {
        if ($request->payment_method == 1)
        {
            Enroll::placeOrder($request);

        }
        elseif ($request->payment_method == 2)
        {
            return 'do payment get way jobs';
        }
        return redirect()->route('home')->with('success','You have successfully enrolled in this course');
    }
    public function manage()
    {
        return view('admin.enroll.manage',[
            'enrolls'=>Enroll::latest()->get(),
        ]);
    }
    public function changeStatus($id)
    {
        $this->enroll=Enroll::find($id);
        if ($this->enroll->payment_status == 'pending')
        {
            $this->enroll->payment_status = 'complete';
        }
//        elseif ($this->enroll->payment_status == 'complete')
//        {
//            $this->enroll->payment_status = 'pending';
//        }
        $this->enroll->save();
        return redirect()->back()->with('success','Enroll status changed successfully');

    }
    public function deleteEnroll($id)
    {
        Enroll::find($id)->delete();
        return redirect()->back()->with('success','Enroll deleted successfully  ');
    }
}
