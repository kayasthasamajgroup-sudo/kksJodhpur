<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',   // Committee name
        'committee',   // optional, for URL or unique identifier
        'image' // optional, for rich text or description
    ];
}
