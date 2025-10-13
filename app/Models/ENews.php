<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ENews extends Model
{
    use HasFactory;

    protected $fillable = [
        'news_name',
        'news_description',
        'news_photo',
        
    ];
}
