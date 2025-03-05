<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function profileImages(): HasMany
    {
        return $this->hasMany(ProfileImage::class, 'user_id', 'user_id');
    }
}
