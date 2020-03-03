<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donor;
use App\Blood_type;
use App\Township;

class DonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donors = Donor::all();
        return view('backend.donors.index',compact('donors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blood_types = Blood_type::all();
        $townships = Township::all();
        return view('backend.donors.create',compact('blood_types','townships'));
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
            "name" => 'required|min:5|max:191',
            "email" => 'required',
            "phone" => 'required|max:11',
            "nrc" => 'required',
            "address" => 'required',
            "blood_type_id" => 'required',
            "gender" => 'required',
            "dob" => 'required',
            "township_id" => 'required'
        ]);

        // store data //4
        $donor = new Donors;
        $donor->name = request('name');
        $donor->email = request('email');
        $donor->phone = request('phone');
        $donor->nrc = request('nrc');
        $donor->address = request('address');
        $donor->blood_type_id = request('blood_type_id');
        $donor->gender = request('gender');
        $donor->dob = request('dob');
        $donor->township_id = request('township_id');

        $donor->save();

        //return redrite
        return redirect()->route('donors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.donors.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $donor = Donor::findOrFail($id);
        return view('backend.donors.edit',compact('donor'));
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
            "name" => 'required|min:5|max:191',
            "email" => 'required',
            "phone" => 'required|max:11',
            "nrc" => 'required',
            "address" => 'required',
            "blood_type_id" => 'required',
            "gender" => 'required',
            "dob" => 'required',
            "township_id" => 'required'
        ]);

        // store data //4
        $donor = Donor::find($id);
        $donor->name = request('name');
        $donor->email = request('email');
        $donor->phone = request('phone');
        $donor->nrc = request('nrc');
        $donor->address = request('address');
        $donor->blood_type_id = request('blood_type_id');
        $donor->gender = request('gender');
        $donor->dob = request('dob');
        $donor->township_id = request('township_id');

        $donor->save();

        //return redrite
        return redirect()->route('donors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $donor = Donor::find($id);
        $donor->delete();
        return redriect()->route('donors.index');
    }
}
