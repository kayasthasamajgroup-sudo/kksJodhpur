<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    // Default table name 'members' बदलकर नया table name दो
    protected $table = 'kks_members';

    // Mass assignable fields
    protected $fillable = [
        'member_name',
        'spouse_name',
        'age',
        'dob',
        'father_name',
        'mother_name',
        'sub_caste',
        'gotra',
        'qualification',
        'profession',
        'parental_place',
        'postal_address',
        'office_address',
        'email',
        'phone',
        'family_members',
        'pic_path',
        'sign_path',
        'receipt_path'
    ];
}
