<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'category',
        'is_service',
        'featured',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'is_service' => 'boolean',
        'featured' => 'boolean',
    ];
}
