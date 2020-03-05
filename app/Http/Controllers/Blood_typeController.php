<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blood_type;
class Blood_typeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blood_types = Blood_type::all();
        return view('backend.blood_types.index',compact('blood_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blood_types = Blood_type::all();
        return view('backend.blood_types.create',compact('blood_types'));
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
            "name" => 'required'
        ]);

        // store data //4
        $blood_type = new Blood_type;
        $blood_type->name = request('name');

        $blood_type->save();
        $user->assignRole('Admin');

        //return redrite
        return redirect()->route('blood_types.index');
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
        $blood_type = Blood_type::findOrFail($id);
        return view('backend.blood_types.edit',compact('blood_type'));
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
            "name" => 'required'
        ]);

        // store data //4
        $blood_type = Blood_type::findOrFail($id);
        $blood_type->name = request('name');

        $blood_type->save();

        //return redrite
        return redirect()->route('blood_types.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blood_type = Blood_type::find($id);
        $blood_type->delete();
        return redirect()->route('blood_types.index');
    }
}
