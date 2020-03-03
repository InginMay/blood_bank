<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Donor;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $bookings = Booking::all();
        
        return view('backend.bookings.index',compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $donors = Donor::all();
        return view('backend.bookings.create',compact('donors'));
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
            "name" => 'required',
            "date"=>'required',
            "status"=>'required'

        ]);

        // store data //4
        $booking = new Booking;
        $booking->donor_id = request('name');
        $booking->date=request('date');
        $booking->status=request('status');

        $booking->save();

        //return redrite
        return redirect()->route('bookings.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $booking=Booking::findOrFail($id);
        $donors=Donor::all(); //$course =>Model Table
         return view('backend.bookings.show',compact('booking','donors'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $booking = Booking::findOrFail($id);
        $donors=Donor::all();
        return view('backend.bookings.edit',compact('booking','donors'));
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
        $request->validate([
            "name" => 'required',
            "date"=>'required',
            "status"=>'required'

        ]);

        // store data //4
        $booking = Booking::findOrFail($id);
        $booking->donor_id = request('name');
        $booking->date=request('date');
        $booking->status=request('status');

        $booking->save();

        //return redrite
        return redirect()->route('bookings.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $booking = Booking::find($id);
        $booking->delete();
        return redirect()->route('bookings.index');
    }
}
