<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donated;
use App\Donor;
use App\Booking;
use Auth;
class DonatedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donateds = Donated::all();
        $donors = Donor::all();
        return view('backend.donated.index',compact('donateds','donors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $donors = Donor::all();
        return view('backend.donated.create',compact('donors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        $request->validate([
            "date"=>'required'
        ]);
        $date = date('Y-m-d');
        $id = request('id');
        // dd($id);
        // $user_id = Booking::find($id);
        // $donor = Donor::where('user_id',$user_id)->first();
        // $donor_id = $donor->id;
        // store data //4
        $donated = new Donated;
        $donated->donor_id = $id;
        $donated->date=$date; 

        $donated->save();
        // dd($donated);
        //return redrite
        return redirect()->route('donated.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $donated = Donated::findOrFail($id);
        $donors=Donor::all();
        return view('backend.donated.edit',compact('donated','donors'));
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
            "date"=>'required'

        ]);

        // store data //4
        $donated = Donated::findOrFail($id);
        $donated->donor_id = request('name');
        $donated->date=request('date');

        $donated->save();

        //return redrite
        return redirect()->route('donated.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $donated = Donated::find($id);
        $donated->delete();
        return redirect()->route('donated.index');
    }
}
