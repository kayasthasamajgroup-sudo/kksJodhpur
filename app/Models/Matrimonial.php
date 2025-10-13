<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matrimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'createdBy',
        'person_name',
        'age',
        'marital_status',
        'gender',
        'dob',
        'sub_cast',
        'gotra',
        'father_name',
        'father_occupation',
        'mother_name',
        'email',
        'phone',
        'qualification',
        'profession',
        'hobbies',
        'postal_address',
        'pic',
    ];
}
