<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Front\EnrollController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[FrontController::class,'home'])->name('home');


Route::get('/details/{id}/{title?}',[FrontController::class,'courseDetails'])->name('course-details');
Route::get('/all-courses',[FrontController::class,'allCourses'])->name('all-courses');
Route::get('/order/{id}',[FrontController::class,'enrollRequest'])->name('enroll-request');


Route::post('/place-order',[EnrollController::class,'placeOrder'])->name('place-order');
Route::get('/my-order/{id}',[FrontController::class,'myOrder'])->name('my-order');
Route::get('/delete-order/{id}',[FrontController::class,'deleteOrder'])->name('delete-order');





