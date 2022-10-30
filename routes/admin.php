<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Front\EnrollController;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {




   Route::middleware('admin_teacher')->group(function (){
       Route::get('/dashboard', [DashboardController::class,'dashboard'])->name('dashboard');

       Route::resource('teachers',TeacherController::class)->middleware('is_admin');
       Route::resource('courses',CourseController::class);
       Route::get('/change-course-status/{id}',[CourseController::class,'changeStatus'])->name('change-course-status');
   });
   Route::middleware('is_admin')->group(function (){
       Route::get('/change-enroll-status/{id}',[EnrollController::class,'changeStatus'])->name('change-enroll-status');

       Route::get('/manage-enrolls',[EnrollController::class,'manage'])->name('manage-enrolls');
       Route::get('/delete-enroll/{id}',[EnrollController::class,'deleteEnroll'])->name('delete-enroll');
   });



});
