<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $fillable = ['user_id','phone','nrc','address','blood_type_id','gender','dob','township_id'];
}
