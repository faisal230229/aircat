<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Service extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $casts = [
        'meta_keywords' => 'array'
    ];

    protected $fillable = [
        'name',
        'slug',
        'short_desc',
        'content',
        'color',
        'meta_title',
        'meta_description',
        'meta_keywords'
    ];
}
