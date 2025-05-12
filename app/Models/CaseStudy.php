<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CaseStudy extends Model {
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id',
        'category',
        'images',
        'status',
    ];

    protected $casts = [
        'id'         => 'integer',
        'category'   => 'string',
        'images'     => 'array', // Cast "images" to array for easy manipulation
        'status'     => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];
}
