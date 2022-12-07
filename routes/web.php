<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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
Route::get('/doctor',[App\Http\Controllers\DoctorController::class,'index'])->name('doctor.index');
Route::get('/doctor/create',[App\Http\Controllers\DoctorController::class,'create'])->name('doctor.create');


