<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',function(){
	return view('backend.dashboard');
})->name('backend')->middleware('Admin');

Route::resource('donors','DonorController');

Route::resource('blood_types','Blood_typeController')->middleware('Admin');

Route::resource('townships','TownshipController')->middleware('Admin');

Route::resource('bookings','BookingController');

Route::resource('donated','DonatedController');

Route::get('/','FrontendController@main')->name('main');

Route::get('about','FrontendController@About')->name('about');

Route::get('contact','FrontendController@Contact')->name('contact');

Route::get('signin','FrontendController@Signin')->name('signin');

Route::get('signup','FrontendController@Signup')->name('signup');

Route::get('booking','FrontendController@Booking')->name('booking');

Route::get('donor_detail/{id}','FrontendController@donor_detail')->name('donor_detail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
