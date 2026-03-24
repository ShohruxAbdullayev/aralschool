<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class IntroSection extends Model
{
    use HasTranslations;

    protected $fillable = [
        'title',
        'description',
    ];

    public $translatable = [
        'title',
        'description',
    ];
}
