<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    // Mass assignable fields
    protected $fillable = [
        'name',
        'owner_name',
        'category',
        'description',
        'email',
        'phone',
        'city',
        'state',
        'country',
        'website',
        'logo',
        'is_active',
    ];

    // Optional: Cast is_active to boolean automatically
    protected $casts = [
        'is_active' => 'boolean',
    ];
     // Accessor for ImageColumn
     public function getLogoUrlAttribute(): ?string
     {
         return $this->logo ? asset('storage/' . $this->logo) : null;
     }
}
