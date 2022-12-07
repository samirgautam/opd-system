<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;

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
