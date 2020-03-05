<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donated extends Model
{
    protected $fillable = ['donor_id','date'];

    public function donor($value='')
    {
    	return $this->belongsTo('App\Donor');
    }

    public function user($value='')
    {
    	return $this->hasMany('App\User');
    }
}
