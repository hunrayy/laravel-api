<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    public $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'news_title',
        'news_description',
        'news_location'
    ];
}
