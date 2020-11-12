<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable=[
        'name', 'year_release', 'rating', 'genre', 'user_id'
    ];
}
