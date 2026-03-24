<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class HeroSection extends Model
{
    use HasTranslations;

    protected $fillable = [
        'image',
        'text',
    ];

    public $translatable = [
        'text',
    ];
}
