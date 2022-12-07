<?php

use App\Http\Controllers\BookingController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\BookingController::class, 'index'])->name('booking');
Route::post('/conform', [App\Http\Controllers\BookingController::class, 'confirm'])->name('confirm');
Route::get('/chart',[App\Http\Controllers\HomeController::class, 'chart'])->name('chart');

   
