<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'member_name',
        'phone',
        'email',
  
        'home_address',
       'event_name',
        'receipt_photo',
        'family_members',
        
    ];
}
