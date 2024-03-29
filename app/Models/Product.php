<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_image',
        'product_name',
        'product_model',
        'product_description',
        'product_manufacturer',
        'product_specimen_type',
        'enabled',
    ];
}