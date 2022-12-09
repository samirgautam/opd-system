<?php

use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\UserController;

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


Auth::routes(['register'=>false]);


Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Booking Routes
Route::get('/booking',[App\Http\Controllers\BookingController::class,'index'])->name('booking.index');
Route::get('/booking/create',[App\Http\Controllers\BookingController::class,'index'])->name('booking.create');
//Doctor Routes
Route::get('/doctor/index', [DoctorController::class, 'index'])->name('doctor.index');
Route::post('/doctor/save', [DoctorController::class, 'store'])->name('doctor.save');
Route::get('/doctor/edit/{id}', [DoctorController::class, 'edit'])->name('doctor.edit');
Route::post('/doctor/update/{id}',[DoctorController::class,'update'])->name('doctor.update');
Route::post('/doctor/delete/{id}', [DoctorController::class, 'destroy'])->name('doctor.delete');
Route::get('/doctor/create', [DoctorController::class, 'create'])->name('doctor.create');

Route::get('/change-password', [App\Http\Controllers\HomeController::class, 'changePassword'])->name('change-password');
Route::post('/change-password', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('update-password');


Route::get('/', [App\Http\Controllers\BookingController::class, 'index'])->name('booking');
Route::post('/conform', [App\Http\Controllers\BookingController::class, 'confirm'])->name('confirm');
Route::get('/chart',[App\Http\Controllers\HomeController::class, 'chart'])->name('chart');



//user routes
Route::get('/user',[UserController::class,'index'])->name('user.index');
Route::get('/user/create',[UserController::class,'create'])->name('user.create');
Route::get('/user/profile',[App\Http\Controllers\HomeController::class,'showUser'])->name('user-profile');
Route::post('/user/save',[App\Http\Controllers\UserController::class,'store'])->name('user.save');

