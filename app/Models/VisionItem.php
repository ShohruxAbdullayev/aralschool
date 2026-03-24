<?php

namespace App\Models;

use App\Models\Concerns\HasSortOrder;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class VisionItem extends Model
{
    use HasSortOrder, HasTranslations;

    protected $fillable = [
        'image',
        'sort_order',
        'title',
        'text',
    ];

    public $translatable = [
        'title',
        'text',
    ];
}
