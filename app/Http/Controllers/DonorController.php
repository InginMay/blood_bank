<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donor;
use App\Blood_type;
use App\Township;
use App\User;

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
            "phone" => 'required',
            "dob" => 'required',
            "nrc" => 'required',
            "address" => 'required',
            "township_id" => 'required',
            "gender" => 'required'
        ]);

        $nrc = request('nrc');
        if (preg_match("/^[1-9]{1,2}\/(([A-Z]|[a-z]){1}([A-Z]|[a-z]){0,2}){3}\b((\(Na\))|(\(Naing\)))[0-9]{6}$/", $nrc)) {
            
            // store data //4
            $user = new User;
            $user->name = request('name');
            $user->email = request('email');
            $user->password=request('password');
            $user->save();

            $u_id = $user->id;
            $donor = new Donor;
            $donor->user_id=$u_id;
            $donor->phone = request('phone');
            $donor->dob = request('dob');
            $donor->nrc = request('nrc');
            $donor->address = request('address');
            $donor->blood_type_id = request('blood_type_id');
            $donor->township_id = request('township_id');
            $donor->gender = request('gender');

            $donor->save();

            //return redrite
            return redirect()->route('donors.index');
        }
        else
        { 
            return Redirect::back()->withErrors($nrc);
        }
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $donor = Donor::where('id',$id)->with('user')->with('bloodtype')->with('townships')->first();
        return response()->json($donor);
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
        $blood_types = Blood_type::all();
        $townships = Township::all();
        return view('backend.donors.edit',compact('donor','blood_types','townships'));
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
            "phone" => 'required',
            "dob" => 'required',
            "nrc" => 'required',
            "address" => 'required',
            "blood_type_id" => 'required',
            "township_id" => 'required',
            "gender" => 'required'
        ]);

        // store data //4
        $user = new User;
        $user->name = request('name');
        $user->email = request('email');
        $user->password=request('password');
        $user->save();

        $u_id = $user->id;
        $donor = Donor::find($id);
        $donor->user_id=$u_id;
        $donor->phone = request('phone');
        $donor->dob = request('dob');
        $donor->nrc = request('nrc');
        $donor->address = request('address');
        $donor->blood_type_id = request('blood_type_id');
        $donor->township_id = request('township_id');
        $donor->gender = request('gender');

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
