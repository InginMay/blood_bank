<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $fillable = ['user_id','phone','nrc','address','blood_type_id','gender','dob','township_id'];

    public function bloodtype($value='')
    {
    	return $this->belongsTo('App\Blood_type','blood_type_id');
    }

    public function townships($value='')
    {
    	return $this->belongsTo('App\Township','township_id');
    }

    public function user($value='')
    {
    	return $this->belongsTo('App\User');
    }

    public function booking($value='')
    {
        return $this->hasOne('App\Booking');
    }

    public function donated($value='')
    {
        return $this->hasOne('App\Donated');
    }


    public function donateds($value='')
    {
        return $this->hasMany('App\Donated','donor_id');
    }
}
