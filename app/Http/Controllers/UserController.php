<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
                    
        return view('user.index',['users'=>User::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name"=>"required|string",
            "email"=>"required|string|unique:users,email",
            "password"=>"required",
            "mobile_number"=>"required|numeric|digits:10",
        ]);

        $user = User::where('name',$request->name)->first();
        if($user){
            return back()->with("error","User Already Exists");
        }

        $user = User::create(
            [
                "name"=> $request->name,
                "email" =>$request->email,
                "password"=> Hash::make('$request->password'),
                "mobile_number"=>$request->mobile_number,
                // "user_id"=>Auth::id(),
            ]);

            if(!$user)
            {
                return back()->with("error","error message");
            }
            return redirect()->route("user.index")->with("success","User Inserted Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //return Doctor::get();
        return view('user.generatebarcode',['doctor'=>Doctor::get()]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
         // example:
        // alert()->question('Are you sure?','You won\'t be able to revert this!')->showCancelButton('Cancel', '#aaa');
        $user = User::findOrfail($id);
        $user->delete();
        return redirect()->route("user.index")->with("success","User Deleted Successfully");
    }
   
}
