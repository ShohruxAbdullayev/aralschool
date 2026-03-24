<?php

namespace App\Models;

use App\Models\Concerns\HasSortOrder;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Mentor extends Model
{
    use HasSortOrder, HasTranslations;

    protected $fillable = [
        'image',
        'category',
        'sort_order',
        'name',
        'bio',
    ];

    public $translatable = [
        'name',
        'bio',
    ];
}
