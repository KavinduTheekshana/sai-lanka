<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'name',
        'content',
        'position',
        'company',
        'image',
        'status', // Add this line
    ];
}
