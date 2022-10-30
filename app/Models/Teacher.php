<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\bitm\FileUpload;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable =['user_id','phone','address','image','description',
        'status'];
    public static function createOrUpdateTeachersAccount($request,$userId,$id=null)
    {


     return  Teacher::updateOrCreate(['id'=>$id],[
           'user_id'=>$userId,
           'phone'=>$request->phone,
           'address'=>$request->address,
           'description'=>$request->description,
           'status'=>$request->status,
           'image'=>FileUpload::imageUpload($request->file('image'),'teacher-image/',isset($id) ? Teacher::find($id)->image : null)
       ]);
    }
    public  function user()
    {
        return $this->belongsTo(User::class);
    }


}
