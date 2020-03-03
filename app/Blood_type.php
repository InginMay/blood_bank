<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blood_type extends Model
{
    protected $fillable = ['name'];

    public function donor($value='')
    {
    	return $this->hasOne('App\Donor');
    }
}
