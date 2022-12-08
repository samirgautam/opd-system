<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }
    public function changePassword()
    {
        return view('change-password');
    }
    public function updatePassword(Request $request)
    {
        $request->validate([
            'old_password'=>'required',
            'new_password'=>'required|confirmed',
        ]);
        if(!Hash::check($request->old_password,auth()->user()->password)){
            return back()->with("error","odd password doesn't match");
    }
    // update new password
    User::whereId(auth()->user()->id)->update([
        'password'=> Hash::make($request->new_password)
    ]);
    return back()->with("status","password change successfully");

    }



        function chart(){
          //  $result=DB::select(DB::raw("SELECT count (*) as total_users, FROM `users` GROUP by users"));
        //$ChartData = "";
        //foreach($result as $list)
           // $chartData.="['".$list->user."',"."$list-> total_user.'"]",;


            return view('chart.chart') ;
        }



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function showUser(){
        return view('user-profile');
    }
}
