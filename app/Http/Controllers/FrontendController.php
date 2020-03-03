<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donor;
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
    	return view('frontend.signup',compact('donors'));
    }

    public function Main($value='')
    {
    	return view('frontend.main');
    }
}
