<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donor;
use App\Township;
use App\Donated;
use App\User;

class FrontendController extends Controller
{
    public function About($value='')
    {
    	return view('frontend.about');
    }

    public function Contact($value='')
    {
    	return view('frontend.contact');
    }
    public function Signin($value='')
    {
    	return view('frontend.signin');
    }

    public function Signup($value='')
    {
        $donors=Donor::all();
        $townships = Township::all();
    	return view('frontend.signup',compact('donors','townships'));
    }

    public function Main($value='')
    {
    	return view('frontend.main');
    }

    public function donor_detail($id)
    {
        $user = User::find($id);
        $donated = Donated::find($id);
        
         return view('frontend.donar_detail',compact('user','donated'));
    }

}
