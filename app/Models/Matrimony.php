<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matrimony extends Model
{
    //
    protected $fillable = [
        'full_name',
        'gender',
        'dob',
        'height',
        'weight',
        'marital_status',
        'religion',
        'caste',
        'mother_tongue',
        'nationality',
        'qualification',
        'occupation',
        'income',
        'company',
        'diet',
        'smoking',
        'drinking',
        'hobbies',
        'father_name',
        'father_occupation',
        'mother_name',
        'mother_occupation',
        'brothers',
        'brothers_married',
        'sisters',
        'sisters_married',
        'phone',
        'alt_phone',
        'email',
        'password',
        'photo',
    ];
}
