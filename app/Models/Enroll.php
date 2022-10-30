<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enroll extends Model
{
    use HasFactory;

    private static $course,$enroll;

    public static function placeOrder($request)
    {
        self::$course = Course::find($request->course_id);
        self::$enroll=new Enroll();
        self::$enroll->course_id = $request->course_id;
        self::$enroll->user_id = auth()->id();
        self::$enroll->teacher_id = self::$course->user_id;
        self::$enroll->payment_status = 'pending';
        self::$enroll->save();

        return self::$enroll;


    }
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function teacher()
    {
        return $this->belongsTo(User::class,'teacher_id');
    }

}
