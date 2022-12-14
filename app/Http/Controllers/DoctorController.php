<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('doctor.index',['doctors' => Doctor::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctor.create',['doctor' => Doctor::get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $doctor = Doctor::where('mobile_number', $request->mobile_number)->first();

        if($doctor){
            return "Doctor is already registered in the system";
        }

		$request->validate([
            'name' => 'required|string',
            'mobile_number' => 'required|numeric|digits:10',
            'description' => 'required',
        ]);

        $doctor = Doctor::create([
            'name' => $request->name,
            'mobile_number' => $request->mobile_number,
            'description' => $request->description

        ]);

        if(!$doctor){
            return back()->with("error","error message");
        }
        return redirect()->route("doctor.index")->with("success","success message");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('doctor.edit',['doctor'=>$doctor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $doctor = Doctor::findOrFail($id);

        $doctor->update([
            'name' => $request->name,
            'mobile_number' => $request->mobile_number,
            'description' => $request->description
        ]);

        if(!$doctor){
            return back()->with("error", "Update error");
        }

        return redirect()->route('doctor.index')->with("success", "Update successfully");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->destroy($id);
        return redirect()->route("doctor.index")->with("success","deleted successfully");
    }
}

