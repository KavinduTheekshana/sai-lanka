<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'user_id',
        'profile_name',
        'email',
        'description',
        'country',
        'city',
        'birthday',
        'occupation',
        'status',
        'birthplace',
        'favourite_tv_shows',
        'favourite_music',
        'favourite_movies',
        'favourite_games',
        'job_title',
        'job_year_started',
        'job_year_end',
        'job_description',
    ];
}
