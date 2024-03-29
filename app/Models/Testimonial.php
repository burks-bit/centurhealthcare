<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $fillable = [
        'testimonial_author',
        'testimonial_author_designation',
        'testimonial_author_gender',
        'testimonial_feedback',
        'enabled',
    ];
}