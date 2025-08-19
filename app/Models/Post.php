<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = [
        'slug',
        'title',
        'content',
        'author',
        'author_info',
        'image',
        'category',
    ];

}
