<?php

namespace App\Models;

use App\Models\Concerns\HasSortOrder;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ResearchTheme extends Model
{
    use HasSortOrder, HasTranslations;

    protected $fillable = [
        'image',
        'number',
        'sort_order',
        'title',
        'description',
    ];

    protected $casts = [
        'number' => 'integer',
    ];

    public $translatable = [
        'title',
        'description',
    ];
}
