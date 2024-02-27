<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeoTag extends Model
{
    use HasFactory;

    protected $casts = [
        'meta_keywords' => 'array'
    ];

    protected $fillable = [
        'meta_title',
        'meta_description',
        'meta_keywords',
        'page_name',
        'index',
        'follow'
    ];
}
