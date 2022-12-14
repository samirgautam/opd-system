<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('booking.index',['booking_list'=>Booking::get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //return $request;
        $request->validate([
            'name' => 'string|required',
            'address' => 'string|required',
            'sex' => 'required|in:male,female,other',
            'mobile_num'=> 'string|required|min:10|max:10',
            'age' =>'numeric|required',
            'is_paid'=> 'boolean',
        ]);

        $booking = Booking::create([
            'name' => $request->name,
            'address' => $request->address,
            'sex' => $request->sex,
            'age' =>$request->age,
            'mobile_num' => $request->mobile_num,
            'is_paid'=> $request->has('is_paid')? true: false,
        ]);
        if(!$booking){
            return back()->with("error","Insertion failed");
        }
        return redirect()->route('bookinglist')->withSuccesss("Insertion successful");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('booking.bookingform');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $booking_list = Booking::findOrFail($id);
        return view('booking.editbooking',['list' => $booking_list]);
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
        $updateBooking = Booking::findOrfail($id);
        $request->validate([
            'name' => 'string|required',
            'address' => 'string|required',
            'sex' => 'required|in:male,female,other',
            'mobile_num'=> 'string|required|min:10|max:10',
            'age' =>'numeric|required',
            'is_paid'=> 'boolean',
        ]);
        $isSuccess =$updateBooking->update([
            'name'=> $request->name,
            'address' => $request->address,
            'sex' => $request->sex,
            'age' =>$request->age,
            'mobile_num' => $request->mobile_num,
            'is_paid'=> $request->has('is_paid')? true: false,
        ]);
        if(!$isSuccess){
            return back()->with('error','Update failed.....');
        }
        return redirect()->route('bookinglist')->withSuccess('Update Success..');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $delete = Booking::findOrfail($id);
        if($delete->delete()){
            return redirect()->route('bookinglist')->withSuccess('Booking deleted successfully');
        }
        
    }
}
