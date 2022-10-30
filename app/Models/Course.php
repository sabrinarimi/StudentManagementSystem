<?php

namespace App\Models;

use App\bitm\FileUpload;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Course extends Model
{
    use HasFactory;
//    protected $fillable =['user_id','title','price','starting_date','short_description',
//        'long_description','image',
//        'status'];
    private static $course;
    public static function createCourses($request)
    {
        self::$course                       = new Course();
        self::$course->user_id              =auth()->id();
        self::$course->title                =$request->title;
        self::$course->price                =$request->price;
        self::$course->starting_date        =$request->starting_date;
        self::$course->short_description    =$request->short_description;
        self::$course->long_description     =$request->long_description;
        self::$course->image                =FileUpload::imageUpload($request->file('image'),'course_banner/');

        self::$course->save();

    }
    public  function user()
    {
        return $this->belongsTo(User::class);
    }


}
