<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class FooterSetting extends Model
{
    use HasTranslations;

    protected $fillable = [
        'key',
        'value',
    ];

    public $translatable = [
        'value',
    ];
}
